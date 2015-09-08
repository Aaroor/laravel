@extends('Pages.master_admin')

@section('content')
    <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Admin Page Controls
                        </a>
                    </li>
                    <hr>
                    <li style="color:#ffffff;background-color: rgba(255,255,255,0.2);font-weight: bold">
                        <a href="/admin">Welcome Controls </a>
                    </li >
                    <li>
                        <a href="/about_control">About Controls >></a>
                    </li>
                    <li>
                        <a href="/contact_control">Contact Controls >></a>
                    </li>
                    <li>
                        <a href="/service_control">Service Controls >></a>
                    </li>
                    <li>
                        <a href="/main_control">Main Controls >></a>
                    </li>

                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <a href="#menu-toggle" class="btn btn-default" style="margin-left:20px" id="menu-toggle">Toggle Menu</a>
                        <div class="col-lg-12" style="margin-top:0px;padding-top:0px">
                                                <h1 class="page-header" style="margin-top:0px">Welcome Page
                                                    <small>Controls</small>
                                                </h1>
                                                <ol class="breadcrumb">
                                                    <li class="active"><a href="/admin">Admin Control</a>
                                                    </li>

                                                </ol>
                                            </div>
                        <div class="col-lg-12">
                            <!-- Service Tabs -->
                                        <div class="row">

                                            <div class="col-lg-12">

                                                <ul id="myTab" class="nav nav-tabs nav-justified">
                                                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Service One</a>
                                                    </li>
                                                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Service Two</a>
                                                    </li>
                                                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Service Three</a>
                                                    </li>
                                                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Service Four</a>
                                                    </li>
                                                </ul>

                                                <div id="myTabContent" class="tab-content">
                                                    <div class="tab-pane fade active in" id="service-one">
                                                        <h4>Service One</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="service-two">
                                                        <h4>Service Two</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="service-three">
                                                        <h4>Service Three</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="service-four">
                                                        <h4>Service Four</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                            <hr>
                                                <footer>
                                                       <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <p>Copyright &copy; Your Website 2014</p>
                                                                    </div>
                                                       </div>
                                                 </footer>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->


        </div>
        <!-- /#wrapper -->
@stop
@section('script1')
    <script>


        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });


    </script>
@stop

