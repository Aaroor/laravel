@extends('Admin_Pages.master_admin_con')
@section('header_sidebar')
            <li><a href="{{ action("PagesController@master_admin_con") }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="{{ action("PagesController@showCover_page") }}"><i class="fa fa-list-alt"></i> <span>Cover Page</span></a></li>
            <li><a href="{{ action("PagesController@showAbout_page") }}"><i class="fa fa-list-alt"></i> <span>About Page</span></a></li>
            <li class="active"><a href="{{ action("PagesController@showContact_page") }}"><i class="fa fa-list-alt"></i> <span>Contact Page</span></a></li>
            <li><a href="{{ action("PagesController@showContant_page") }}"><i class="fa fa-list-alt"></i> <span>Service Page</span></a></li>
            @if (Session::get('key.b')== 'superadmin')
                 <li><a href="{{ action("PagesController@showUser_page") }}"><i class="fa fa-list-alt"></i> <span>Admin User Control</span></a></li>
            @endif

@stop

@section('content')
<h1>Contact Page</h1>
<div id="myDiv"><h2>Check ajax</h2></div>
<button type="button" onclick="myFunction()">Change Content</button>
@stop