
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="Temp/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Temp/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="Temp/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
        <link href="Temp/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span></a>
                <img src="Images/adora.jpg" height="50px" width="60px" class="navbar-brand" style="margin:0px 0px 0px 0px;padding: 0px 0px 0px 0px" href="/">

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/service">Services</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Admin User<b class="caret"></b></a>
                        <ul class="dropdown-menu" >
                            <li style="padding-left:10px;padding-right:10px">
                               <form>
                                 <div class="form-group">
                                   <label for="exampleInputEmail1">Email address</label>
                                   <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                 </div>
                                 <div class="form-group">
                                   <label for="exampleInputPassword1">Password</label>
                                   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                 </div>

                                 <button type="submit" class="btn btn-success">Sign in</button>
                               </form>
                            </li>
                            <li>
                                <a href="/forget" onmouseover='this.style.textDecoration="underline"' onmouseout='this.style.textDecoration="none"'>Forgot Password</a>

                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->


    <!-- Page Content -->
    <div class="container">
            @yield('sub_nav')
            @yield('content')

    </div>
    <!-- /.container -->
     <!-- Footer -->

    <!-- jQuery -->
    <script src="Temp/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Temp/js/bootstrap.min.js"></script>




@yield('script1')
</body>

</html>
