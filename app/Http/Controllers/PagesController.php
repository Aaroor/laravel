<?php

namespace App\Http\Controllers;
use App\Admin;
use DB;
use Illuminate\Support\Facades\Session;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function about()
    {
    // return 'This is a about page';
    return view('Pages.about');
    }
    public function service_page()
    {
        return view('Pages.service');
    }

    public function new_page()
    {

        $first='Aarooran';
        $last='Kanthasamy';
     //   Session::put('key',$first);
        dd(Session::all());

        return view('check');



    }
    public function cover_page()
    {
        return view('Pages.cover_page');
    }
    public function home_page()
    {
        return view('Pages.home');
    }
    public function contact()
    {
        return view('Pages.contact');
    }
    public function forget_page()
    {
        return view('Pages.forget');
    }
    public function master_page()
    {
        return view('Pages.master');
    }
    public function sample_admin_page()
    {
        return view('Pages.sampleadmin');
    }
    public function admin_page()
    {
        return view('Pages.admin');
    }
    public function about_control_page()
    {
        return view('Pages.about_control');
    }
    public function contact_control_page()
    {
        return view('Pages.contact_control');
    }
    public function service_control_page()
    {
        return view('Pages.service_control');
    }
    public function main_control_page()
    {
        return view('Pages.main_control');
    }
    public function check()
    {
      //  $value = Admin::whereRaw('userid = U001 and password = hji')->get;
    //    $value= Admin::all();
      //  return view('check',compact('value'));

        return view('Web_Pages.cover');

     //   return $value;

    }
    public function store()
    {
        return view('check');
    }


    public function master_admin_con()
    {

        return view('Admin_Pages.Admin_home');
    }

    public function showCover_page()
    {

        $values=DB::table('phonecontact')
            ->where('id','=',1)
            ->first();

        return view('Admin_Pages.Admin_cover',compact('values'));

    }
    public function showAbout_page()
    {
        return view('Admin_Pages.Admin_about');
    }
    public function showContact_page()
    {
        return view('Admin_Pages.Admin_contact');
    }
    public function showContant_page()
    {
        return view('Admin_Pages.Admin_contant');
    }
    public function showUser_page()
    {
        return view('Admin_Pages.Admin_user_control');
    }

    public function browse_product()
    {
        return view('Web_Pages.product_view');
    }

    public function main_page()
    {

        $values=DB::table('phonecontact')
            ->where('id','=',1)
            ->first();

        return view('Web_Pages.cover',compact('values'));
      //  return view('Web_Pages.cover');
    }
    public function product_page()
    {
        return view('Web_Pages.product');
    }
    public function forgot_page()
    {
        return view('Web_Pages.forgot');
    }
    public function pass_page()
    {
        return view('Web_Pages.password_error');
    }
    public function showMailbox_page()
    {
        return view('Admin_Pages.Mailbox');
    }



}
