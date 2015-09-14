@extends('Admin_Pages.master_admin_con')
@section('header_sidebar')
            <li><a href="{{ action("PagesController@master_admin_con") }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="{{ action("PagesController@showCover_page") }}"><i class="fa fa-list-alt"></i> <span>Cover Page</span></a></li>
            <li><a href="{{ action("PagesController@showAbout_page") }}"><i class="fa fa-list-alt"></i> <span>About Page</span></a></li>
            <li class="active"><a href="{{ action("PagesController@showContact_page") }}"><i class="fa fa-list-alt"></i> <span>Contact Page</span></a></li>
            <li><a href="{{ action("PagesController@showContant_page") }}"><i class="fa fa-list-alt"></i> <span>Contant Page</span></a>


@stop

@section('content')

            <h1>Contact Page</h1>
                      {{--<button type="button" onclick="myFunction()">Change Content</button>--}}


                  <div class="row" style="font-size: 15px">
                     <div class="col-md-4" style="font-size:15px">

                      <hr>
                        @if(Session::has('flash_message'))
                                      <ul class="alert-success">
                                          {{Session::get('flash_message')}}</ul>
                                   @endif

                                {{--@if($errors -> any())--}}

                                                  {{--<ul class="alert alert-danger" >--}}
                                                   {{--@foreach($errors->all() as $error)--}}
                                                      {{--<li>{{ $error }}</li>--}}
                                                   {{--@endforeach--}}
                                                  {{--</ul>--}}

                                   {{--@endif --}}

                      {!! Form::open(['method' => 'POST' , 'action' => ['ContactController@Update']]) !!}
                      <div class="form-group" >
                          {!! Form::label('Street No') !!}
                        <input type="text" name="door_no" style="font-size:15px" class="form-control input-sm" value="{{$details_admin->door_no}}" >
                      </div>

                     <div class="form-group">
                          {!! Form::label('Street Address') !!}
                           <input type="text" name="street_address" style="font-size:15px" class="form-control input-sm" value="{{$details_admin->street_address}}" >
                      </div>

                     <div class="form-group">
                            {!! Form::label('Country') !!}
                       <input type="text" name="country" style="font-size:15px" class="form-control input-sm" value="{{$details_admin->country}}" >
                     </div>

                     <div class="form-group">
                            {!! Form::label('Postal Code') !!}
                        <input type="text" name="postal_code" style="font-size:15px" class="form-control input-sm" value="{{$details_admin->postal_code}}" >
                      </div>

                     <div class="form-group">
                             {!! Form::label('Phone No') !!}
                        <input type="number" name="phone_no" style="font-size:15px" class="form-control input-sm" value="{{$details_admin->phone_no}}" >
                     </div>

                     <div class="form-group">
                            {!! Form::label('Email') !!}
                       <input type="text" name="email" style="font-size:15px" class="form-control input-sm" value="{{$details_admin->email}}" >
                     </div>

                     <div class="form-group">
                            {!! Form::label('Time') !!}
                        <input type="text" name="time" style="font-size:15px" class="form-control input-sm" value="{{$details_admin->time}}" >
                     </div>

                      <div class="form-group">
                             {!!Form::submit('Update',['class'=>'btn btn-primary pull-right'])!!}

                      </div>

                      {!! Form::close() !!}

                   </div>
                    <div class="col-sm-4">
                        <br>
                        <h2>Contact Details</h2>
                        <br>


                            {{--<form id="uploadForm" action="{{ URL::to('Upload') }}" method="post" enctype="multipart/form-part">--}}

                                {{--<label for="exampleInputFile">Choose Image File</label>--}}
                                {{--<br>--}}
                                {{--<input type="file" id="img_val" name="img_val" ><br>--}}


                                {{--<input type="submit" value="Upload" name="submit">--}}
                                {{--<input type="hidden" value="{{ csrf_token }}" name="_token">--}}


                             {{--</form>--}}



                            {{--<br>--}}
                            {{--<br>--}}
                        <p>{{$details_admin->door_no}},
                        <br>
                            {{$details_admin->street_address}}

                            {{$details_admin->country}}, {{$details_admin->postal_code}}
                        </p>
                            <p><i class="fa fa-phone"></i>
                        <abbr title="Phone">P</abbr>: {{$details_admin->phone_no}}<label> </label> </p>
                        <p><i class="fa fa-envelope-o"></i>
                        <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">{{$details_admin->email}}</a>
                        </p>
                        <p><i class="fa fa-clock-o"></i>
                        <abbr title="Hours">H</abbr>: {{$details_admin->time}}</p>

                  </div>

                   </div>



@stop