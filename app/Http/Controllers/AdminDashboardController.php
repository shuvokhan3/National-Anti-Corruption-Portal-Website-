<?php

namespace App\Http\Controllers;

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
}
