<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;



class MainController extends Controller
{
    function index(){
        return view('admin.login');        
    }

    function checklogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|alpha|min:3'
        ]);
        $user_data=array(
            'email' =>  $request->get('email'),
            'password' =>  $request->get('password'),
            
        );
        if(Auth::attempt($user_data))
        {
            return redirect('main/successlogin');
        }
        else
        {
             return back()->with('error', 'Wrong Login Details');
        }
   
    }   
   
    function successlogin()
    {
        return redirect()->route('headline.index');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('userheadline.index');
    }

}
