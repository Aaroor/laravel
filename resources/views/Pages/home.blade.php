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
@section('drop_down')
 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Admin User<b class="caret"></b></a>
                        <ul class="dropdown-menu" >
                            <li style="padding-left:10px;padding-right:10px">
                            <!--  {!!Form::open(['url'=>'test'])!!}
                                    <div class="form-group">
                                        {!!Form::label('exampleInputEmail1','Email address:')!!}
                                        {!!Form::email('exampleInputEmail1',null,['class'=>'form-control','placeholder'=>'Email'])!!}
                                    </div>
                                    <div class="form-group">
                                        {!!Form::label('exampleInputPassword1','Password:')!!}
                                        {!!Form::Password('exampleInputEmail1',['class'=>'form-control','placeholder'=>'Password'])!!}
                                    </div>

                                        {!!Form::submit('Sign in',['class'=>'btn btn-success'])!!}

                                {!!Form::close()!!}-->

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
                            <li>
                                <a href="/forget" onmouseover='this.style.textDecoration="underline"' onmouseout='this.style.textDecoration="none"'>Forgot Password</a>

                            </li>

                        </ul>
@stop
@section('car_ous_el')
    <!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="margin-top:10px">
                <div class="item active">
                    <div class="fill" style="background-image:url('Images/dr11.jpg')"></div>
                    <div class="carousel-caption">
                        <h2>Caption 1</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('Images/dr11.jpg')"></div>

                    <div class="carousel-caption">
                        <h2>Caption 2</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('Images/dr11.jpg');">
                    </div>
                    <div class="carophpusel-caption">
                        <h2>Caption 3</h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>
@stop
@section('content')
    <!-- Portfolio Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Portfolio Heading</h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
            </div>
            <!-- /.row -->

            <!-- Features Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Modern Business Features</h2>
                </div>
                <div class="col-md-6">
                    <p>The Modern Business template by Start Bootstrap includes:</p>
                    <ul>
                        <li><strong>Bootstrap v3.2.0</strong>
                        </li>
                        <li>jQuery v1.11.0</li>
                        <li>Font Awesome v4.1.0</li>
                        <li>Working PHP contact form with validation</li>
                        <li>Unstyled page elements for easy customization</li>
                        <li>17 HTML pages</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="http://placehold.it/700x450" alt="">
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Call to Action Section -->
            <div class="well">
                <div class="row">
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                    </div>

                </div>
            </div>
@stop

@section('car_script')
 <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>
@stop
