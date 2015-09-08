@extends('Web_Pages.web_master')
@section('phone_no')
        <div class="col-sm-6 col-xs-4">
            <div class="top-number"><p><i class="fa fa-phone-square"></i> 0750394039</p></div>
        </div>
@stop
@section('nav_bar')
        <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="/main">Home</a></li>
                        <li class="active"><a href="/main">Browse</a></li>
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
@section('new_product')
    <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 wow fadeInDown">
                       <div class="tab-wrap">
                            <div class="media">
                                <div class="parrent pull-left">
                                    <ul class="nav nav-tabs nav-stacked">
                                        <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Gents New Arrivals</a></li>
                                        <li ><a href="#tab1" data-toggle="tab" class="analistic-01">Women New Arrivals</a></li>

                                        <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Kids New Arrivals</a></li>

                                    </ul>
                                </div>

                                <div class="parrent media-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade" id="tab1">
                                            <div class="media">
                                             <?php
                                                 $conn=mysqli_connect("localhost","root","newworld2014","adoraweb");

                                                 if ($conn->connect_error)
                                                 {
                                                     die("Connection failed: " . $conn->connect_error);
                                                 }
                                                 $sql="select * from new_wome_arrival";
                                                 $result = $conn->query($sql);
                                                  if ($result->num_rows > 0)
                                                    {


                                                        while ($row = $result->fetch_assoc())
                                                        {
                                                            echo "
                                                            <div class='pull-left'>
                                                                <img class='img-responsive' src='".$row['new_arr_wom_img_path']."'>
                                                                </div>

                                                            ";
                                                        }
                                                    }
                                                      $conn->close();
                                              ?>
                                   <!--            <div class="pull-left">
                                                    <img class="img-responsive" src="Web/images/tab2.png">
                                                </div>
                                                <div class="pull-left">
                                                    <img class="img-responsive" src="Web/images/tab2.png">
                                                </div>
                                                <div class="pull-left">
                                                    <img class="img-responsive" src="Web/images/tab2.png">
                                                </div>-->

                                            </div>
                                        </div>

                                         <div class="tab-pane fade active in" id="tab2">
                                            <div class="media">
                                            <?php
                                                 $conn=mysqli_connect("localhost","root","newworld2014","adoraweb");

                                                 if ($conn->connect_error)
                                                 {
                                                     die("Connection failed: " . $conn->connect_error);
                                                 }
                                                 $sql1="select * from new_gents_arrival";
                                                 $result1 = $conn->query($sql1);
                                                  if ($result1->num_rows > 0)
                                                    {


                                                        while ($row1 = $result1->fetch_assoc())
                                                        {
                                                            echo "
                                                            <div class='pull-left'>
                                                                <img class='img-responsive' src='".$row1['new_arr_img_path']."'>
                                                                </div>

                                                            ";
                                                        }
                                                    }
                                                      $conn->close();
                                             ?>
                                             <!--  <div class="pull-left">
                                                    <img class="img-responsive" src="Web/images/tab1.png">
                                                </div>
                                                 <div class="pull-left">
                                                                                                    <img class="img-responsive" src="Web/images/tab1.png">
                                                                                                </div>
                                                                                                 <div class="pull-left">
                                                                                                                                                    <img class="img-responsive" src="Web/images/tab1.png">
                                                                                                                                                </div>
                                            </div>-->
                                         </div>

                                         <div class="tab-pane fade" id="tab3">
                                              <div class="media">
                                                    <?php
                                                         $conn=mysqli_connect("localhost","root","newworld2014","adoraweb");

                                                         if ($conn->connect_error)
                                                         {
                                                             die("Connection failed: " . $conn->connect_error);
                                                         }
                                                         $sql2="select * from new_ki_arrival";
                                                         $result2 = $conn->query($sql2);
                                                          if ($result2->num_rows > 0)
                                                            {


                                                                while ($row2 = $result2->fetch_assoc())
                                                                {
                                                                    echo "
                                                                    <div class='pull-left'>
                                                                        <img class='img-responsive' src='".$row1['new_arr_ki_img_path']."'>
                                                                        </div>

                                                                    ";
                                                                }
                                                            }
                                                              $conn->close();
                                                    ?>
                                              </div>
                                         </div>


                                    </div> <!--/.tab-content-->
                                </div> <!--/.media-body-->
                            </div> <!--/.media-->
                        </div><!--/.tab-wrap-->
                    </div><!--/.col-sm-6-->



                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/#content-->
@stop

@section('pro_content')
     <div class="row">

                                                <div class="col-lg-12">

                                                    <ul id="myTab" class="nav nav-tabs nav-justified">
                                                        <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-male fa-2x"></i>    <b>Gents Dresses</b></a>
                                                        </li>
                                                        <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-female fa-2x"></i> <b>Women Dresses</b></a>
                                                        </li>
                                                        <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-meh-o fa-2x"></i> <b>Kids Dresses</b></a>
                                                        </li>

                                                    </ul>

                                                    <div id="myTabContent" class="tab-content">
                                                        <div class="tab-pane fade active in" id="service-one">
                                                            <section id="recent-works">
                                                                        <div class="container">

                                                                            <div class="row">
                                                                                <?php
                                                                                     $conn=mysqli_connect("localhost","root","newworld2014","adoraweb");

                                                                                     if ($conn->connect_error)
                                                                                     {
                                                                                         die("Connection failed: " . $conn->connect_error);
                                                                                     }
                                                                                     $sql3="select * from gents_dress";
                                                                                     $result3 = $conn->query($sql3);
                                                                                      if ($result3->num_rows > 0)
                                                                                        {


                                                                                            while ($row3 = $result3->fetch_assoc())
                                                                                            {
                                                                                                echo "
                                                                                                 <div class='col-xs-12 col-sm-4 col-md-3'style='margin-bottom:20px'>
                                                                                                        <div class='recent-work-wrap'>
                                                                                                            <img class='img-responsive' src='".$row3['gents_dress_img_path']."' alt=''>
                                                                                                            <div class='overlay'>
                                                                                                                <div class='recent-work-inner'>
                                                                                                                    <h3><a href='#'>".$row3['gents_dress_title']."</a> </h3>
                                                                                                                    <p>".$row3['gents_dress_des']."</p>
                                                                                                                    <a class='preview' href='".$row3['gents_dress_img_path']."' rel='prettyPhoto' height='220px' width='220px'><i class='fa fa-eye'></i> View</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                ";
                                                                                            }
                                                                                        }
                                                                                          $conn->close();
                                                                                ?>
                                                                              <!--  <div class="col-xs-12 col-sm-4 col-md-3">
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
                                                                                </div>-->

                                                                            <!--    <div class="col-xs-12 col-sm-4 col-md-3">
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
                                                                            </div><!--/.row-->
                                                                             <nav>
                                                                                  <ul class="pagination">
                                                                                    <li>
                                                                                      <a href="#" aria-label="Previous">
                                                                                        <span aria-hidden="true">&laquo;</span>
                                                                                      </a>
                                                                                    </li>
                                                                                    <li><a href="#">1</a></li>
                                                                                    <li><a href="#">2</a></li>
                                                                                    <li><a href="#">3</a></li>
                                                                                    <li><a href="#">4</a></li>
                                                                                    <li><a href="#">5</a></li>
                                                                                    <li>
                                                                                      <a href="#" aria-label="Next">
                                                                                        <span aria-hidden="true">&raquo;</span>
                                                                                      </a>
                                                                                    </li>
                                                                                  </ul>
                                                                             </nav>
                                                                        </div><!--/.container-->
                                                                </section><!--/#recent-works-->


                                                        </div>
                                                        <div class="tab-pane fade" id="service-two">
                                                            <section id="recent-works">
                                                                    <div class="container">

                                                                        <div class="row">
                                                                             <?php
                                                                                 $conn=mysqli_connect("localhost","root","newworld2014","adoraweb");

                                                                                 if ($conn->connect_error)
                                                                                 {
                                                                                     die("Connection failed: " . $conn->connect_error);
                                                                                 }
                                                                                 $sql4="select * from women_dress";
                                                                                 $result4 = $conn->query($sql4);
                                                                                  if ($result4->num_rows > 0)
                                                                                    {


                                                                                        while ($row4 = $result4->fetch_assoc())
                                                                                        {
                                                                                            echo "
                                                                                             <div class='col-xs-12 col-sm-4 col-md-3'style='margin-bottom:20px'>
                                                                                                    <div class='recent-work-wrap'>
                                                                                                        <img class='img-responsive' src='".$row4['women_dress_img_path']."' alt=''>
                                                                                                        <div class='overlay'>
                                                                                                            <div class='recent-work-inner'>
                                                                                                                <h3><a href='#'>".$row4['women_dress_title']."</a> </h3>
                                                                                                                <p>".$row4['women_dress_des']."</p>
                                                                                                                <a class='preview' href='".$row4['women_dress_img_path']."' rel='prettyPhoto'><i class='fa fa-eye'></i> View</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            ";
                                                                                        }
                                                                                    }
                                                                                      $conn->close();
                                                                            ?>
                                                                                                                                           <!-- <div class="col-xs-12 col-sm-4 col-md-3">
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
                                                                                                                                            -->
                                                                                                                                        </div><!--/.row-->
                                                                                                                                         <nav>
                                                                                                                                              <ul class="pagination">
                                                                                                                                                <li>
                                                                                                                                                  <a href="#" aria-label="Previous">
                                                                                                                                                    <span aria-hidden="true">&laquo;</span>
                                                                                                                                                  </a>
                                                                                                                                                </li>
                                                                                                                                                <li><a href="#">1</a></li>
                                                                                                                                                <li><a href="#">2</a></li>
                                                                                                                                                <li><a href="#">3</a></li>
                                                                                                                                                <li><a href="#">4</a></li>
                                                                                                                                                <li><a href="#">5</a></li>
                                                                                                                                                <li>
                                                                                                                                                  <a href="#" aria-label="Next">
                                                                                                                                                    <span aria-hidden="true">&raquo;</span>
                                                                                                                                                  </a>
                                                                                                                                                </li>
                                                                                                                                              </ul>
                                                                                                                                         </nav>
                                                                                                                                    </div><!--/.container-->
                                                                                                                            </section><!--/#recent-works-->
                                                        </div>
                                                        <div class="tab-pane fade" id="service-three">
                                                          <section id="recent-works">
                                                                                                                                  <div class="container">

                                                                                                                                      <div class="row">
                                                                                                                                         <!-- <div class="col-xs-12 col-sm-4 col-md-3">
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
                                                                                                                                          <?php
                                                                                                                                                       $conn=mysqli_connect("localhost","root","newworld2014","adoraweb");

                                                                                                                                                       if ($conn->connect_error)
                                                                                                                                                       {
                                                                                                                                                           die("Connection failed: " . $conn->connect_error);
                                                                                                                                                       }
                                                                                                                                                       $sql5="select * from kids_dress";
                                                                                                                                                       $result5 = $conn->query($sql5);
                                                                                                                                                        if ($result5->num_rows > 0)
                                                                                                                                                          {


                                                                                                                                                              while ($row5 = $result5->fetch_assoc())
                                                                                                                                                              {
                                                                                                                                                                  echo "
                                                                                                                                                                   <div class='col-xs-12 col-sm-4 col-md-3' style='margin-bottom:20px'>
                                                                                                                                                                          <div class='recent-work-wrap'>
                                                                                                                                                                              <img class='img-responsive' src='".$row5['kids_dress_img_path']."' alt=''>
                                                                                                                                                                              <div class='overlay'>
                                                                                                                                                                                  <div class='recent-work-inner'>
                                                                                                                                                                                      <h3><a href='#'>".$row5['kids_dress_title']."</a> </h3>
                                                                                                                                                                                      <p>".$row5['kids_dress_des']."</p>
                                                                                                                                                                                      <a class='preview' href='".$row5['kids_dress_img_path']."' rel='prettyPhoto'><i class='fa fa-eye'></i> View</a>
                                                                                                                                                                                  </div>
                                                                                                                                                                              </div>
                                                                                                                                                                          </div>
                                                                                                                                                                      </div>

                                                                                                                                                                  ";
                                                                                                                                                              }
                                                                                                                                                          }
                                                                                                                                                            $conn->close();
                                                                                                                                                  ?>
                                                                                                                                      </div><!--/.row-->
                                                                                                                                       <nav>
                                                                                                                                            <ul class="pagination">
                                                                                                                                              <li>
                                                                                                                                                <a href="#" aria-label="Previous">
                                                                                                                                                  <span aria-hidden="true">&laquo;</span>
                                                                                                                                                </a>
                                                                                                                                              </li>
                                                                                                                                              <li><a href="#">1</a></li>
                                                                                                                                              <li><a href="#">2</a></li>
                                                                                                                                              <li><a href="#">3</a></li>
                                                                                                                                              <li><a href="#">4</a></li>
                                                                                                                                              <li><a href="#">5</a></li>
                                                                                                                                              <li>
                                                                                                                                                <a href="#" aria-label="Next">
                                                                                                                                                  <span aria-hidden="true">&raquo;</span>
                                                                                                                                                </a>
                                                                                                                                              </li>
                                                                                                                                            </ul>
                                                                                                                                       </nav>
                                                                                                                                  </div><!--/.container-->
                                                                                                                          </section><!--/#recent-works-->
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>


@stop

