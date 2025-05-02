<?php

namespace App\Http\Controllers;

use App\Helpers\JWTToken;
use App\Models\CorruptionReport;
use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function viewLogin()
    {
        return view('pages.auth.login-page');
    }
    function viewRegister(){
        return view('pages.auth.registration-page');
    }
    function userProfile(){
        return view('pages.userDashboard.userProfile-page');
    }

    public function viewContact(){
        return view('pages.contact');
    }
    public function viewCorruptions(){
        return view('pages.corruptions');
    }
    public function viewDetails(){
        return view('pages.corruptionsDetails');
    }
    public function submitForm(){
        return view('pages.corruptionInfoForm');
    }
    public function page(){
        return view('pages.home');
    }
    public function viewAbout(){
        return view('pages.about');
    }





    function UserRegistration(Request $request){
        try{
            User::create([
                'fullName' => $request->input('fullName'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => $request->input('password')
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'User Registration Successfully'
            ],200);
        }catch (\Exception $e){
            return response()->json(["error" => $e->getMessage()]);
        }
    }
    function UserLogin(Request $request){
        $count = User::where('email','=',$request->input('email'))
            ->where('password','=',$request->input('password'))
            ->select('id')->first();

        if($count !== null){
            //user Login->JWT token issue
            $token = JWTToken::CreateToken($request->input('email'),$count->id);

            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successfully'
            ],200)->cookie('token', $token, 60*24*60);
        }else{
            return response()->json([
               'status' => 'failed',
               'message' => 'unauthorized'
            ]);
        }
    }
    function UserLogout(Request $request)
    {
        return redirect('/user-Login')->cookie('token','', -1);
    }

    public function CreateReport(Request $request){
        try{

            $user_id = $request->header('id');

            //process image upload
            $img = $request->file('img');
            $img_url = null;
            if($img){
                $time = time();
                $file_name = $img->getClientOriginalName();
                $img_name = "{$user_id}-{$time}-{$file_name}";

                //make image url
                $img_url = "uploads/{$img_name}";
                //upload file
                $img->move(public_path('uploads'),$img_name);
            }

            //process video upload
            $video = $request->file('video');
            $video_url = null;
            if($video){

                $time = time();
                $file_name = $video->getClientOriginalName();
                $video_name = "{$user_id}-{$time}-{$file_name}";

                $video_url = "uploads/{$video_name}";

                //upload file
                $video->move(public_path('uploads'),$video_name);
            }

            //check if both file is uploaded
            if(!$img && !$video){
                return response()->json([
                    'status' => 'failed',
                    'message'=> 'No file uploaded, Please upload and image or video'
                ]);
            }

            //save to database
            return CorruptionReport::create([
                'user_id'=>$user_id,
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'severity'=>$request->input('severity'),
                'image_path'=>$img_url,
                'video_path'=>$video_url
            ]);

        }catch (\Exception $e){
            return response()->json([
                'status' => 'failed',
                'message'=>'Something went wrong'
            ]);
        }
    }

    public function ReportsFeeds(Request $request){
        try{
            return CorruptionReport::all();
        }catch (\Exception $e){
            return response()->json([
                'status' => 'failed',
                'message'=>'Something went wrong'
            ]);
        }

    }

}
