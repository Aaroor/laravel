<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Contact;
use Illuminate\Support\Facades\Session;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact_Image;

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
    public function new_Contact()
    {
        $details = Contact::find(1);
        $img = Contact_Image::find(1);
        return view('Web_Pages.new_Contact',compact('details','img'));
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

        return view('Web_Pages.wep_cover');

     //   return $value;

    }
    public function store()
    {
        return view('check');
    }

    public function ducks()
    {
        return view('Web_Pages.ducks');
    }
    public function master_admin_con()
    {

        return view('Admin_Pages.Admin_home');
    }

    public function showCover_page()
    {

        return view('Admin_Pages.Admin_cover');
    }
    public function showAbout_page()
    {
        return view('Admin_Pages.Admin_about');
    }
    public function showContact_page()
    {
        $details_admin = Contact::find(1);
        $img = Contact_Image::find(1);
        return view('Admin_Pages.Admin_contact',compact('details_admin','img'));
    }
    public function showContant_page()
    {
        return view('Admin_Pages.Admin_contant');
    }

    public function front_about()
    {
        $about = about::all();
        return view('Web_Pages.front_about',compact('about'));
    }

    public function about_add()
    {
        $input = Request::all();
        $des = $input['about'];

        $About = new about();
        $About->about = $des;

        if($About->save())
            Session::flash('message','Successfully added');
        return view('Admin_Pages.Admin_about');
    }


}
