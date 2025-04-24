<?php

namespace App\Http\Controllers;

use App\Models\CorruptionReport;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function viewDashboard()
    {
        return view('pages.AdminDashboard.dashboard-page');
    }
    public function adminViewReports(){
        return view('pages.AdminDashboard.report-page');
    }

    public function adminReportsDetails(){
        return view('pages.AdminDashboard.admin-report-details-page');
    }

    public function AdminReports(Request $request){
        return CorruptionReport::all();
    }

    public function SingleAdminReport(Request $request){

        try{
            $report_id = $request->input('id');
            return CorruptionReport::where('id','=',$report_id)
                ->first();
        }catch (\Exception $exception){
            return response()->json([
                'status'=> 'Error',
                'message' => 'Something went wrong'
            ]);
        }
    }



    public function StatusUpdate(Request $request){

        try{
            //take the report id and status number 0 or 1
            $report_id = $request->input('id');
            $status = $request->input('status');

            //check the present status
            $presentStatus = CorruptionReport::where('id','=',$report_id)
                ->where('status','!=',0)
                ->first();
            //if the status is 0
            if($presentStatus === null){

                return CorruptionReport::where('id', '=', $report_id)
                    ->where('status','!=',$status)
                    ->update([
                        'status'=>$status
                    ]);


            }else{//if the status is 1
                return response()->json([
                    'message'=>'Report Status Already Updated'
                ]);

            }

        }catch (\Exception $exception){
            return response()->json([
                'status'=> 'Error',
                'message' => 'Something went wrong'
            ]);
        }


    }

    public function StatusById(Request $request){
        $report_id = $request->input('id');

        $val = CorruptionReport::find($report_id)->status;

        if($val === 1){
            return "Resolved";
        }
        if($val === 0){
            return "Under Review";
        }

    }

}


