@extends('Web_Pages.web_master')
@section('nav_bar')
        <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/main">Home</a></li>
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
@section('main-slider')
<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(Web/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 style="margin-top:0px;padding-top:0px" class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="Web/images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(Web/images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="Web/images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(Web/images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="Web/images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
@stop

@section('rece_work')
    <section id="recent-works">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Recent Works</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="Web/images/portfolio/recent/item1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a> </h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="Web/images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="Web/images/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="Web/images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="Web/images/portfolio/recent/item3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme </a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="Web/images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="Web/images/portfolio/recent/item4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme </a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="Web/images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="Web/images/portfolio/recent/item5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="Web/images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="Web/images/portfolio/recent/item6.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme </a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="Web/images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="Web/images/portfolio/recent/item7.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme </a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="Web/images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="Web/images/portfolio/recent/item8.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme </a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="Web/images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/#recent-works-->
@stop