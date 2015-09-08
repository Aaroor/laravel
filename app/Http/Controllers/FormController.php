<?php

namespace App\Http\Controllers;
use Request;
use DB;
use App\config;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Input;
use App\Contact;
use Illuminate\Support\Facades\Redirect;
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
            Session::put('key.b',$values->user_type);
         //   return view('Admin_Pages.Admin_home',compact('values'));
            return view('Admin_Pages.Admin_home');
        }
        else
        {
            return view('Web_Pages.password_error');
        }

    }

    public function contact_change()
    {
        $phone=Request::input('phone_no');
        DB::table('phonecontact')
            ->where('id','=',1)
            ->update(['phone_no'=>$phone]);
        $values=DB::table('phonecontact')
            ->where('id','=',1)
            ->first();
        return view('Admin_Pages.Admin_cover',compact('values'));

    }
    public function slider_image()
    {
        if(Input::hasFile('back_img_val'))
        {
            $file=Input::file('back_img_val');
            $file->move('Images',$file->getClientOriginalName());

        }
        $values=DB::table('phonecontact')
            ->where('id','=',1)
            ->first();
        return view('Admin_Pages.Admin_cover',compact('values'));
    }
    public function email_pass()
    {
        $str = 'ABCD';
        $shuffled = str_shuffle($str);
        $num=rand(1,500);
        $pass=$shuffled."BA".$num;

        $email=Request::input('exampleInputEmail1');
        $count=DB::table('users')
            ->where('email','=',$email)
            ->count();

        if($count==1) {

            DB::table('users')
                ->where('email', '=', $email)
                ->update(['password' => $pass]);
            $values = DB::table('users')
                ->where('email', '=', $email)
                ->first();
            $username = $values->username;
            $password = $values->password;


            try {
                \Mail::send('Web_Pages.mail',
                    array(

                        'username' => $username,
                        'password' => $password



                    ), function ($message) {
                        $email=Request::input('exampleInputEmail1');
                        //  $message->from('paidvertz@gmail.com');
                        $message->to($email)->subject('Admin Message');
                    });

           //     \Session::flash('flash_message', 'Your Message has been send!');

            } catch (Exception $e) {
              //  \Session::flash('flash_message_error', 'Your Message has not been send!');
            }
            return view('Web_Pages.forgot');
        }
        else
        {
            return view('Web_Pages.forgot_error');
        }



    }
}
