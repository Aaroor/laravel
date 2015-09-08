@extends('Web_Pages.web_master')
@section('nav_bar')
<div class="collapse navbar-collapse navbar-right">
    <ul class="nav navbar-nav">
        <li ><a href="/main">Home</a></li>
        <li><a href="about-us.html">About Us</a></li>
        <li><a href="services.html">Services</a></li>

        <li><a href="contact-us.html">Contact</a></li>
        <li class="dropdown" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  Admin Login <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li style="padding-left:10px;padding-right:10px">
                    {!!Form::open(['action'=>'FormController@login_con', 'method'=>'POST'])!!}
                    <div class="form-group">
                        {!!Form::label('exampleInputEmail1','Email address:')!!}
                        {!!Form::email('exampleInputEmail1',null,['class'=>'form-control','placeholder'=>'Email'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('exampleInputPassword1','Password:')!!}
                        {!!Form::Password('exampleInputPassword1',['class'=>'form-control','placeholder'=>'Password'])!!}
                    </div>

                    {!!Form::submit('Sign in',['class'=>'btn btn-success'])!!}

                    {!!Form::close()!!}
                </li>
                <br>
                <li>
                    <a href="/forgot" onmouseover='this.style.textDecoration="underline"' onmouseout='this.style.textDecoration="none"'>Forgot Password</a>

                </li>

            </ul>
        </li>
    </ul>
</div>
@stop
@section('forgot')
<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown" style="margin-top:0px;padding-bottom:0px;margin-left:0px;padding-left:0px;text-align:left">
            <h2>Your email id is not in the system!.....</h2>

        </div>


</section>
@stop