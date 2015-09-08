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
                    <li >
                        <a href="/admin">Welcome Controls </a>
                    </li >
                    <li>
                        <a href="/about_control">About Controls >></a>
                    </li>
                    <li style="color:#ffffff;background-color: rgba(255,255,255,0.2);font-weight: bold">
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
                        <a href="#menu-toggle" class="btn btn-default" style="margin-left:5px" id="menu-toggle">Toggle Menu</a>
                        <div class="col-lg-12" style="margin-top:0px;padding-top:0px">
                                                <h1 class="page-header" style="margin-top:0px">Contact Page
                                                    <small>Controls</small>
                                                </h1>
                                                <ol class="breadcrumb">
                                                    <li ><a href="/admin">Admin Control</a>
                                                    </li>
                                                    <li class="active"><a href="/contact_control">Contact Control</a></li>


                                                </ol>
                                            </div>
                        <div class="col-lg-12">
                            <h1>Simple Sidebar</h1>
                            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>

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

