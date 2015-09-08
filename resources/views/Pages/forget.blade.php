@extends('Pages.master')
@section('headers')
    <li>
        <a href="/about" >About</a>
    </li>
    <li>
        <a href="/service">Services</a>
    </li>
    <li>
        <a href="/contact">Contact</a>
    </li>
@stop
@section('sub_head')
     <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">About
                        <small>Subheading</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a>
                        </li>
                        <li class="active">Forget Password</li>
                    </ol>
                </div>
      </div>
@stop
@section('content')

            <div class="col-md-4" style="">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4><i class="fa fa-share"></i> Recovery Password From mail</h4>
                      </div>
                           <div class="panel-body">
                                     <form action="http://localhost:8000/welcome" method="POST">
                                         <div class="form-group">
                                           <label for="exampleInputEmail1">Enter Admin Email address</label>
                                           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                         </div>

                                             <button type="submit" class="btn btn-success">Submit</button>
                                     </form>

                            </div>
                 </div>

             </div>

@stop