<?php

namespace App\Http\Controllers;

use App\Helpers\JWTToken;
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


}
