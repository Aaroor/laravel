@extends('Admin_Pages.master_admin_con')
@section('header_sidebar')
            <li><a href="{{ action("PagesController@master_admin_con") }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="{{ action("PagesController@showCover_page") }}"><i class="fa fa-list-alt"></i> <span>Cover Page</span></a></li>
            <li class="active"><a href="{{ action("PagesController@showAbout_page") }}"><i class="fa fa-list-alt"></i> <span>About Page</span></a></li>
            <li><a href="{{ action("PagesController@showContact_page") }}"><i class="fa fa-list-alt"></i> <span>Contact Page</span></a></li>
            <li><a href="{{ action("PagesController@showContant_page") }}"><i class="fa fa-list-alt"></i> <span>Contant Page</span></a></li>
@stop

@section('content')
<section class="content">
<div class="row">
       {!! Form::open(array('url'=>'home_about'))!!}

       @if(\Illuminate\Support\Facades\Session::has('message'))
       <h4><p class="alert alert-info"><font color="#006400">{{Session::get('message')}}</font></p></h4>
       @endif

       <div class="form-group">
        <label for="exampleInputPassword1">About</label>
        <textarea class="form-control" name="about" rows="3"></textarea>
       </div>

       <button type="submit" class="btn btn-success">Submit</button>

       {!!Form::close()!!}
  </div><!-- /.row -->
  </section>
@stop