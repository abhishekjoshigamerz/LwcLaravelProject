<?php

namespace App\Http\Controllers\LoginController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class LoginController extends Controller
{
    public function index(){
        return view('adminpanel/login');
    }

    public function CheckLogin(Request $request){
        
        $password = md5($request->password);

        $user = User::where('email',$request->email)->where('password',$password)->first();

        if($user){
            $request->session()->put('USERID',$user->id);
            return redirect('adminpanel/dashboard');

        }else{
            $request->session()->flash('status', 'Email Or Password is incorrect! Please try again!');
            return redirect('adminpanelroute/login');
        }

    }

    public function logout(Request $request){
        $request->session()->forget('USERID');
        return redirect('adminpanelroute/login');
    }
}
