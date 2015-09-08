@extends('Web_Pages.web_master')
@section('phone_no')
        <div class="col-sm-6 col-xs-4">
            <div class="top-number"><p><i class="fa fa-phone-square"></i> {{$values->phone_no}}</p></div>
        </div>
@stop
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
 <?php
 $conn=mysqli_connect("localhost","root","newworld2014","adoraweb");

 if ($conn->connect_error)
 {
     die("Connection failed: " . $conn->connect_error);
 }
 $sql="select * from slider";
 $result = $conn->query($sql);
 $val;
 echo "<div class='carousel slide'>


              <ol class='carousel-indicators'>";

 if ($result->num_rows > 0)
   {


       while ($row = $result->fetch_assoc()) {
       $val=$row['id']-1;
       if($row['id']==1)
       {
       echo " <li data-target='#main-slider' data-slide-to='".$val."' class='active'></li>";
       }
       else
       {
       echo " <li data-target='#main-slider' data-slide-to='".$val."'></li>";
       }



       }

   }
   echo "</ol> <div class='carousel-inner'>";
   ?>
     <?php
     $conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
     $sql1="select * from slider";
     $result1 = $conn->query($sql1);

        if ($result->num_rows > 0)
        {

                while ($row1 = $result1->fetch_assoc()) {
                if($row1['id']==1)
                {
                    echo" <div class='item active' style='background-image: url(".$row1['back_img_path']."'> ";
                    echo "<div class='container'>
                                                             <div class='row slide-margin'>
                                                                <div class='col-sm-6'>
                                                                    <div class='carousel-content'>
                                                                        <h1 style='margin-top:0px;padding-top:0px' class='animation animated-item-1'>New Arrival...</h1>
                                                                        <h2 class='animation animated-item-2'>".$row1['description']."</h2>
                                                                        <a class='btn-slide animation animated-item-3' href='/browse_product'>Browse More</a>
                                                                    </div>
                                                                </div>

                                                                 <div class='col-sm-6 hidden-xs animation animated-item-4'>
                                                                    <div class='slider-img'>
                                                                        <img src='".$row1['for_img_path']."' class='img-responsive'>
                                                                    </div>
                                                                 </div>

                                                             </div>
                                                 </div>";



                   echo " </div>";
                }
                else
                {
                     echo "<div class='item' style='background-image: url(".$row1['back_img_path'].")'>";
                      echo    "<div class='container'>
                                                 <div class='row slide-margin'>
                                                     <div class='col-sm-6'>
                                                         <div class='carousel-content'>
                                                             <h1 class='animation animated-item-1'>New Arrival...</h1>
                                                             <h2 class='animation animated-item-2'>".$row1['description']."</h2>
                                                             <a class='btn-slide animation animated-item-3' href='/browse_product'>Browse More.</a>
                                                         </div>
                                                     </div>

                                                     <div class='col-sm-6 hidden-xs animation animated-item-4'>
                                                         <div class='slider-img'>
                                                             <img src='".$row1['for_img_path']."' class='img-responsive'>
                                                         </div>
                                                     </div>

                                                 </div>
                                             </div>";

                     echo"</div>";

                }
               }

        }







              /*      echo "<div class='container'>
                                         <div class='row slide-margin'>
                                            <div class='col-sm-6'>
                                                <div class='carousel-content'>
                                                    <h1 style='margin-top:0px;padding-top:0px' class='animation animated-item-1'>Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                                    <h2 class='animation animated-item-2'>Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                                    <a class='btn-slide animation animated-item-3' href='#'>Read More</a>
                                                </div>
                                            </div>

                                             <div class='col-sm-6 hidden-xs animation animated-item-4'>
                                                <div class='slider-img'>
                                                    <img src='Web/images/slider/img1.png' class='img-responsive'>
                                                </div>
                                             </div>

                                         </div>
                             </div>";











      echo "<div class='item' style='background-image: url(Web/images/slider/bg2.jpg)'>";
                    echo    "<div class='container'>
                            <div class='row slide-margin'>
                                <div class='col-sm-6'>
                                    <div class='carousel-content'>
                                        <h1 class='animation animated-item-1'>Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                        <h2 class='animation animated-item-2'>Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                        <a class='btn-slide animation animated-item-3' href='#'>Read More</a>
                                    </div>
                                </div>

                                <div class='col-sm-6 hidden-xs animation animated-item-4'>
                                    <div class='slider-img'>
                                        <img src='Web/images/slider/img2.png' class='img-responsive'>
                                    </div>
                                </div>

                            </div>
                        </div>";
                   echo "</div>";

                  echo  "<div class='item' style='background-image: url(Web/images/slider/bg3.jpg)'>
                            <div class='container'>
                                <div class='row slide-margin'>
                                    <div class='col-sm-6'>
                                        <div class='carousel-content'>
                                            <h1 class='animation animated-item-1'>Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                            <h2 class='animation animated-item-2'>Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                            <a class='btn-slide animation animated-item-3' href='#'>Read More</a>
                                        </div>
                                    </div>
                                    <div class='col-sm-6 hidden-xs animation animated-item-4'>
                                        <div class='slider-img'>
                                            <img src='Web/images/slider/img3.png' class='img-responsive'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>";*/

                echo "</div>
            </div>
            <a class='prev hidden-xs' href='#main-slider' data-slide='prev'>
                <i class='fa fa-chevron-left'></i>
            </a>
            <a class='next hidden-xs' href='#main-slider' data-slide='next'>
                <i class='fa fa-chevron-right'></i>
            </a>";
?>


    </section>
@stop

@section('rece_work')
    <section id="recent-works">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Recent Works</h2>

                </div>
                <?php
                    $conn=mysqli_connect("localhost","root","newworld2014","adoraweb");

                    if ($conn->connect_error)
                    {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql="select * from recent_work";
                    $result = $conn->query($sql);
                    echo "<div class='row'>";

                    if ($result->num_rows > 0)
                    {

                        while ($row = $result->fetch_assoc())
                        {
                           echo "<div class='col-xs-12 col-sm-4 col-md-3'>
                                                    <div class='recent-work-wrap'>
                                                        <img class='img-responsive' src='".$row['recent_img_path']."' alt=''>
                                                        <div class='overlay'>
                                                            <div class='recent-work-inner'>
                                                                <h3><a href='#'>".$row['des_title']."</a> </h3>

                                                                <p>".$row['description']."</p>
                                                                <a class='preview' href='".$row['recent_img_path']."' rel='prettyPhoto'><i class='fa fa-eye'></i> View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>";
                        }
                    }
                    echo "</div>";
                    mysqli_close($conn);
                    ?>
               <!-- <div class="row">
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
                    </div>-->
                </div>

    </section>
@stop