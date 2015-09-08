@extends('Admin_Pages.master_admin_con')
     @section('header_sidebar')
                 <li><a href="{{ action("PagesController@master_admin_con") }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
                 <li><a href="{{ action("PagesController@showCover_page") }}"><i class="fa fa-list-alt"></i> <span>Cover Page</span></a></li>
                 <li><a href="{{ action("PagesController@showAbout_page") }}"><i class="fa fa-list-alt"></i> <span>About Page</span></a></li>
                 <li><a href="{{ action("PagesController@showContact_page") }}"><i class="fa fa-list-alt"></i> <span>Contact Page</span></a></li>
                 <li><a href="{{ action("PagesController@showContant_page") }}"><i class="fa fa-list-alt"></i> <span>Service Page</span></a></li>
                 @if (Session::get('key.b')== 'superadmin')
                    <li  class="active"><a href="{{ action("PagesController@showUser_page") }}"><i class="fa fa-list-alt"></i> <span>Admin User Control</span></a></li>
                 @endif
     @stop


     @section('content')
     <section class="content">
             <div class="row">
                 <div class="col-md-6">
                     <div class="box box-danger">
                             <div class="box-header">
                               <h3 class="box-title">Change contact number</h3>
                             </div>
                         <div class="box-body">
                                <div class="col-md-2">
                                <div class="pull-left image">
                                                <img src="Admin/dist/img/user.png" class="img-circle" style="height:60px" alt="User Image" />
                                </div>
                                </div>


                              <div class="input-group">
                                <form id="Form_ad_user" action="create_user.php" method="post">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Admin Name:</label>
                                      <input type="text" name="u_name" class="form-control" id="ad_name" placeholder="Enter Admin Name.."required>
                                   </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="u_email" class="form-control" id="exInputEmail2" placeholder="Email" required>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Enter Password</label>
                                    <input type="password" name="u_password" class="form-control" id="exInputPassword1" placeholder="New Password">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">Confirm Password</label>
                                      <input type="password" class="form-control" id="exInputPassword2" name="u_repass" placeholder="Re-Type Password">
                                  </div>

                                    <br><br>
                                    <input type="submit" value="Submit" class="btn btn-success" />


                                </form>
                                <button onclick="clear_user_fields()">click</button>

                              <!--
                              <div class="form-group">
                                     <label>Contact Number:</label>
                                     <div class="input-group-addon">
                                         <i class="fa fa-phone"></i>
                                       </div>
                                       <input type="text" id="ph_no" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                 </div>
                                 <br> <br>
                                 <button class="btn btn-success" onclick="change_phone_no()">Submit</button>-->
                              </div>


                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="box box-default collapsed-box">
                       <div class="box-header with-border">
                         <h3 class="box-title">Expandable</h3>
                         <div class="box-tools pull-right">
                           <button class="btn btn-box-tool"  onclick="view_recent_work()" data-widget="collapse"><i class="fa fa-plus"></i></button>
                         </div><!-- /.box-tools -->
                       </div><!-- /.box-header -->
                       <div class="box-body" id="targetLayer_user">

                       </div><!-- /.box-body -->
                     </div><!-- /.box -->



                 </div><!-- /.col (right) -->
                <!-- <div class="col-md-6">
                               <div class="box box-primary">
                                 <div class="box-header">
                                   <h3 class="box-title">Current Value</h3>
                                 </div>
                                 <div class="box-body" id="change_con">
                                     <table id="example2" class="table table-bordered table-hover">
                                                         <thead>
                                                           <tr>
                                                             <th>No</th>
                                                             <th>Phone Number</th>
                                                           </tr>
                                                         </thead>
                                                         <tbody>
                                                           <tr>
                                                             <td>1</td>
                                                             <td></td>

                                                           </tr>

                                                         </tbody>

                                                       </table>

                                 </div>
                               </div>
                 </div>-->
             </div>
             @section('script3')
                <script type="text/javascript">
                          $(document).ready(function (e) {
                          	$("#Form_ad_user").on('submit',(function(e) {
                          		e.preventDefault();
                          		$.ajax({
                                  	url: "http://localhost/laravel/resources/views/PHP_Files/create_user.php",
                          			type: "POST",
                          			data:  new FormData(this),
                          			contentType: false,
                              	    cache: false,
                          			processData:false,
                          			success: function(data)
                          		    {
                          			$("#targetLayer_user").html(data);
                          		    },
                          		  	error: function()
                          	    	{
                          	    	}
                          	   });
                          	}));
                          });
                          </script>
             @stop
        </section>
     @stop