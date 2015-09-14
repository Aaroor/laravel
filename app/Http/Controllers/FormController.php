<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\config;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class FormController extends Controller
{

    public function login_con()
    {
        $email = Request::input('exampleInputEmail1');
        $password=Request::input('exampleInputPassword1');
        $count=DB::table('users')
            ->where('email','=',$email)
            ->where('password','=',$password)
            ->count();
        if($count==1)
        {
            $values=DB::table('users')
                ->where('email','=',$email)
                ->where('password','=',$password)
                ->first();
            Session::put('key.a',$values->username);
         //   return view('Admin_Pages.Admin_home',compact('values'));
            return view('Admin_Pages.Admin_home');
        }
        else
        {
            return view('Pages.forget');
        }

    }
}
