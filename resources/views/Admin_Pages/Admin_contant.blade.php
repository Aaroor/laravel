@extends('Admin_Pages.master_admin_con')
@section('header_sidebar')
            <li><a href="{{ action("PagesController@master_admin_con") }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="{{ action("PagesController@showCover_page") }}"><i class="fa fa-list-alt"></i> <span>Cover Page</span></a></li>
            <li><a href="{{ action("PagesController@showAbout_page") }}"><i class="fa fa-list-alt"></i> <span>About Page</span></a></li>
            <li><a href="{{ action("PagesController@showContact_page") }}"><i class="fa fa-list-alt"></i> <span>Contact Page</span></a></li>
            <li class="active"><a href="{{ action("PagesController@showContant_page") }}"><i class="fa fa-list-alt"></i> <span>Service Page</span></a></li>
            @if (Session::get('key.b')== 'superadmin')
                 <li><a href="{{ action("PagesController@showUser_page") }}"><i class="fa fa-list-alt"></i> <span>Admin User Control</span></a></li>
            @endif
@stop

@section('content')
 <div class="row">

                     <div class="col-lg-12">

                         <ul id="myTab" class="nav nav-tabs nav-justified">
                             <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-male fa-1x"></i> Gents Dresses Controller</a>
                             </li>
                             <li class="" onclick="view_contant()"><a href="#service-two"  data-toggle="tab"><i class="fa fa-female fa-1x"></i> Women Dresses Controller</a>
                             </li>
                             <li class="" onclick="view_recent_work()"><a href="#service-three" data-toggle="tab"><i class="fa fa-meh-o fa-1x"></i> Kids Dresses Controller</a>
                             </li>
                         </ul>

                         <div id="myTabContent" class="tab-content">
                             <div class="tab-pane fade active in" id="service-one">
                                <br>
                                    <section class="content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="box box-danger">
                                                            <div class="box-header">
                                                              <h3 class="box-title">Add Gents New arrival Image</h3>
                                                            </div>
                                                        <div class="box-body">


                                                            <form id="uploadForm_new_arr_gents" action="upload_new_arr.php" method="post">
                                                                  <div class="box-body">

                                                                    <div class="form-group">
                                                                      <label for="exampleInputFile">Choose Image</label>
                                                                      <input type="file" id="back_img_val" name="userImage_new_arr" onchange="new_arrival_gents(this)">
                                                                      <p class="help-block" style="color:green">Your imgae should be gets dress.</p>
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="exampleInputFile">Description Title</label>
                                                                      <input type="text"  name="new_arri_tit" >

                                                                    </div>


                                                                    <div class="form-group">
                                                                      <label>Enter Description</label>
                                                                      <textarea class="form-control" rows="3" name="new_arri_de" placeholder="Enter ..."></textarea>
                                                                    </div>

                                                                  </div><!-- /.box-body -->

                                                                  <div class="box-footer">
                                                                   <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
                                                                    <input type="submit" value="Submit" class="btn btn-primary" />
                                                                  </div>
                                                                  <div id="targetLayer_new_arr_gents"></div>
                                                            </form>




                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                              <div class="box box-primary">
                                                                <div class="box-header">
                                                                  <h3 class="box-title">Selected Images</h3>
                                                                </div>
                                                                <div class="box-body">

                                                                               <div class="col-md-10">

                                                                                          <div class="thumbnail">
                                                                                              <img class="img-responsive" id="new_arr_ge_img" src="http://placehold.it/750x450" alt="">
                                                                                          </div>
                                                                               </div>

                                                                </div><!-- /.box-body -->
                                                              </div><!-- /.box -->
                                                </div><!-- /.col (right) -->
                                            </div>

                                            <div class="row">

                                                   <div class="col-md-12">
                                                                 <div class="box box-default collapsed-box">
                                                                   <div class="box-header with-border">
                                                                     <h3 class="box-title">All Gents New Arrivals </h3>
                                                                     <div class="box-tools pull-right">
                                                                       <button class="btn btn-box-tool"  onclick="view_new_arr_gents()" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                                     </div><!-- /.box-tools -->
                                                                   </div><!-- /.box-header -->
                                                                   <div class="box-body" id="dis_new_arr_gents_table">

                                                                   </div><!-- /.box-body -->
                                                                 </div><!-- /.box -->



                                                   </div><!-- /.col (right) -->

                                            </div>
                                            <div class="row"  id="image_new_arr_gents_change">

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="box box-danger">
                                                            <div class="box-header">
                                                              <h3 class="box-title">Add Gents Dress</h3>
                                                            </div>
                                                        <div class="box-body">


                                                            <form id="uploadForm_gents_dress" action="upload_gents_dress.php" method="post">
                                                                  <div class="box-body">

                                                                    <div class="form-group">
                                                                      <label for="exampleInputFile">Choose Image</label>
                                                                      <input type="file" id="back_img_val" name="userImage_gents_dress" onchange="gents_dress_onchange(this)">
                                                                      <p class="help-block" style="color:green">Your Image Should Be Gents Dress.</p>
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="exampleInputFile">Description Title</label>
                                                                      <input type="text"  name="gents_dress__tit" >

                                                                    </div>


                                                                    <div class="form-group">
                                                                      <label>Enter Description</label>
                                                                      <textarea class="form-control" rows="3" name="gents_dress_de" placeholder="Enter ..."></textarea>
                                                                    </div>

                                                                  </div><!-- /.box-body -->

                                                                  <div class="box-footer">
                                                                   <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
                                                                    <input type="submit" value="Submit" class="btn btn-primary" />
                                                                  </div>
                                                                  <div id="targetLayer_gents_dress"></div>
                                                            </form>




                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                              <div class="box box-primary">
                                                                <div class="box-header">
                                                                  <h3 class="box-title">Selected Images</h3>
                                                                </div>
                                                                <div class="box-body">

                                                                               <div class="col-md-10">

                                                                                          <div class="thumbnail">
                                                                                              <img class="img-responsive" id="gents_dress_img" src="http://placehold.it/750x450" alt="">
                                                                                          </div>
                                                                               </div>

                                                                </div><!-- /.box-body -->
                                                              </div><!-- /.box -->
                                                </div><!-- /.col (right) -->
                                            </div>
                                            <div class="row">

                                                   <div class="col-md-12">
                                                                 <div class="box box-default collapsed-box">
                                                                   <div class="box-header with-border">
                                                                     <h3 class="box-title">All Gents Dresses</h3>
                                                                     <div class="box-tools pull-right">
                                                                       <button class="btn btn-box-tool"  onclick="view_gents_dress()" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                                     </div><!-- /.box-tools -->
                                                                   </div><!-- /.box-header -->
                                                                   <div class="box-body" id="gents_dress_table">

                                                                   </div><!-- /.box-body -->
                                                                 </div><!-- /.box -->



                                                   </div><!-- /.col (right) -->

                                            </div>
                                            <div class="row"  id="gents_dress_change_img">

                                            </div>

                                    </section>
                             </div>
                             <div class="tab-pane fade" id="service-two">

                                 <section class="content">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="box box-danger">
                                                     <div class="box-header">
                                                       <h3 class="box-title">Add New Arrival Women Dresses</h3>
                                                     </div>
                                                 <div class="box-body">


                                                     <form id="uploadForm_new_arr_wom" action="upload_new_wom_arr.php" method="post">
                                                           <div class="box-body">

                                                             <div class="form-group">
                                                               <label for="exampleInputFile">Choose Image</label>
                                                               <input type="file" id="back_img_val" name="userImage_new_wom_arr" onchange="new_arrival_wom(this)">
                                                               <p class="help-block" style="color:green">Your Image Should be Women Dress.</p>
                                                             </div>
                                                             <div class="form-group">
                                                               <label for="exampleInputFile">Description Title</label>
                                                               <input type="text"  name="new_arri_wom_tit" >

                                                             </div>


                                                             <div class="form-group">
                                                               <label>Enter Description</label>
                                                               <textarea class="form-control" rows="3" name="new_arri_wom_de" placeholder="Enter ..."></textarea>
                                                             </div>

                                                           </div><!-- /.box-body -->

                                                           <div class="box-footer">
                                                            <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
                                                             <input type="submit" value="Submit" class="btn btn-primary" />
                                                           </div>
                                                           <div id="targetLayer_new_arr_wom"></div>
                                                     </form>




                                                 </div>
                                             </div>
                                         </div>

                                         <div class="col-md-6">
                                                       <div class="box box-primary">
                                                         <div class="box-header">
                                                           <h3 class="box-title">Selected Images</h3>
                                                         </div>
                                                         <div class="box-body">

                                                                        <div class="col-md-10">

                                                                                   <div class="thumbnail">
                                                                                       <img class="img-responsive" id="new_arr_wom_img" src="http://placehold.it/750x450" alt="">
                                                                                   </div>
                                                                        </div>

                                                         </div><!-- /.box-body -->
                                                       </div><!-- /.box -->
                                         </div><!-- /.col (right) -->
                                     </div>
                                     <div class="row">

                                            <div class="col-md-12">
                                                          <div class="box box-default collapsed-box">
                                                            <div class="box-header with-border">
                                                              <h3 class="box-title">All New Arrival Women Dresses</h3>
                                                              <div class="box-tools pull-right">
                                                                <button class="btn btn-box-tool"  onclick="view_new_arr_wome()" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                              </div><!-- /.box-tools -->
                                                            </div><!-- /.box-header -->
                                                            <div class="box-body" id="dis_new_arr_wom_table">

                                                            </div><!-- /.box-body -->
                                                          </div><!-- /.box -->



                                            </div><!-- /.col (right) -->

                                     </div>
                                     <div class="row"  id="image_new_arr_wom_change">

                                     </div>
                                     <div class="row">
                                             <div class="col-md-6">
                                                 <div class="box box-danger">
                                                         <div class="box-header">
                                                           <h3 class="box-title">Add Women Dresses</h3>
                                                         </div>
                                                     <div class="box-body">


                                                         <form id="uploadForm_wom_dress" action="upload_wom_dress.php" method="post">
                                                               <div class="box-body">

                                                                 <div class="form-group">
                                                                   <label for="exampleInputFile">Choose Image</label>
                                                                   <input type="file" id="back_img_val" name="userImage_wom_dress" onchange="wom_dress_onchange(this)">
                                                                   <p class="help-block" style="color:green">Your Image Should Be Women Dresses.</p>
                                                                 </div>
                                                                 <div class="form-group">
                                                                   <label for="exampleInputFile">Description Title</label>
                                                                   <input type="text"  name="wom_dress__tit" >

                                                                 </div>


                                                                 <div class="form-group">
                                                                   <label>Enter Description</label>
                                                                   <textarea class="form-control" rows="3" name="wom_dress_de" placeholder="Enter ..."></textarea>
                                                                 </div>

                                                               </div><!-- /.box-body -->

                                                               <div class="box-footer">
                                                                <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
                                                                 <input type="submit" value="Submit" class="btn btn-primary" />
                                                               </div>
                                                               <div id="targetLayer_wom_dress"></div>
                                                         </form>




                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="col-md-6">
                                                           <div class="box box-primary">
                                                             <div class="box-header">
                                                               <h3 class="box-title">Selected Images</h3>
                                                             </div>
                                                             <div class="box-body">

                                                                            <div class="col-md-10">

                                                                                       <div class="thumbnail">
                                                                                           <img class="img-responsive" id="wom_dress_img" src="http://placehold.it/750x450" alt="">
                                                                                       </div>
                                                                            </div>

                                                             </div><!-- /.box-body -->
                                                           </div><!-- /.box -->
                                             </div><!-- /.col (right) -->
                                         </div>
                                         <div class="row">

                                                <div class="col-md-12">
                                                              <div class="box box-default collapsed-box">
                                                                <div class="box-header with-border">
                                                                  <h3 class="box-title">All Women Dresses</h3>
                                                                  <div class="box-tools pull-right">
                                                                    <button class="btn btn-box-tool"  onclick="view_wom_dress()" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                                  </div><!-- /.box-tools -->
                                                                </div><!-- /.box-header -->
                                                                <div class="box-body" id="wom_dress_table">

                                                                </div><!-- /.box-body -->
                                                              </div><!-- /.box -->



                                                </div><!-- /.col (right) -->

                                         </div>
                                         <div class="row"  id="image_wom_dress_change">

                                     </div>
                             </section>
                             </div>
                             <div class="tab-pane fade" id="service-three">
                                  <section class="content">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <div class="box box-danger">
                                                       <div class="box-header">
                                                         <h3 class="box-title">Add New Arrivals Kids Dresses</h3>
                                                       </div>
                                                   <div class="box-body">


                                                       <form id="uploadForm_new_arr_ki" action="upload_new_ki_arr.php" method="post">
                                                             <div class="box-body">

                                                               <div class="form-group">
                                                                 <label for="exampleInputFile">Choose Image</label>
                                                                 <input type="file" id="back_img_val" name="userImage_new_ki_arr" onchange="new_arrival_ki(this)">
                                                                 <p class="help-block" style="color:green">Your Image Should Be Kids Dress.</p>
                                                               </div>
                                                               <div class="form-group">
                                                                 <label for="exampleInputFile">Description Title</label>
                                                                 <input type="text"  name="new_arri_ki_tit" >

                                                               </div>


                                                               <div class="form-group">
                                                                 <label>Enter Description</label>
                                                                 <textarea class="form-control" rows="3" name="new_arri_ki_de" placeholder="Enter ..."></textarea>
                                                               </div>

                                                             </div><!-- /.box-body -->

                                                             <div class="box-footer">
                                                              <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
                                                               <input type="submit" value="Submit" class="btn btn-primary" />
                                                             </div>
                                                             <div id="targetLayer_new_arr_ki"></div>
                                                       </form>




                                                   </div>
                                               </div>
                                           </div>

                                           <div class="col-md-6">
                                                         <div class="box box-primary">
                                                           <div class="box-header">
                                                             <h3 class="box-title">Selected Images</h3>
                                                           </div>
                                                           <div class="box-body">

                                                                          <div class="col-md-10">

                                                                                     <div class="thumbnail">
                                                                                         <img class="img-responsive" id="new_arr_ki_img" src="http://placehold.it/750x450" alt="">
                                                                                     </div>
                                                                          </div>

                                                           </div><!-- /.box-body -->
                                                         </div><!-- /.box -->
                                           </div><!-- /.col (right) -->
                                       </div>
                                       <div class="row">

                                              <div class="col-md-12">
                                                            <div class="box box-default collapsed-box">
                                                              <div class="box-header with-border">
                                                                <h3 class="box-title">All New Arrivals Kids Dresses</h3>
                                                                <div class="box-tools pull-right">
                                                                  <button class="btn btn-box-tool"  onclick="view_new_arr_ki()" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                                </div><!-- /.box-tools -->
                                                              </div><!-- /.box-header -->
                                                              <div class="box-body" id="dis_new_arr_ki_table">

                                                              </div><!-- /.box-body -->
                                                            </div><!-- /.box -->



                                              </div><!-- /.col (right) -->

                                       </div>
                                       <div class="row"  id="image_new_arr_ki_change">

                                       </div>
                                       <div class="row">
                                            <div class="col-md-6">
                                                <div class="box box-danger">
                                                        <div class="box-header">
                                                          <h3 class="box-title">Add Kids Dresses</h3>
                                                        </div>
                                                    <div class="box-body">


                                                        <form id="uploadForm_kids_dress" action="upload_kids_dress.php" method="post">
                                                              <div class="box-body">

                                                                <div class="form-group">
                                                                  <label for="exampleInputFile">Choose Image</label>
                                                                  <input type="file" id="back_img_val" name="userImage_kids_dress" onchange="kids_dress_onchange(this)">
                                                                  <p class="help-block" style="color:green">Your Image Should Be Kids Dress</p>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="exampleInputFile">Description Title</label>
                                                                  <input type="text"  name="kids_dress__tit" >

                                                                </div>


                                                                <div class="form-group">
                                                                  <label>Enter Description</label>
                                                                  <textarea class="form-control" rows="3" name="kids_dress_de" placeholder="Enter ..."></textarea>
                                                                </div>

                                                              </div><!-- /.box-body -->

                                                              <div class="box-footer">
                                                               <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
                                                                <input type="submit" value="Submit" class="btn btn-primary" />
                                                              </div>
                                                              <div id="targetLayer_kids_dress"></div>
                                                        </form>




                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                          <div class="box box-primary">
                                                            <div class="box-header">
                                                              <h3 class="box-title">Selected Images</h3>
                                                            </div>
                                                            <div class="box-body">

                                                                           <div class="col-md-10">

                                                                                      <div class="thumbnail">
                                                                                          <img class="img-responsive" id="kids_dress_img" src="http://placehold.it/750x450" alt="">
                                                                                      </div>
                                                                           </div>

                                                            </div><!-- /.box-body -->
                                                          </div><!-- /.box -->
                                            </div><!-- /.col (right) -->
                                        </div>
                                        <div class="row">

                                               <div class="col-md-12">
                                                             <div class="box box-default collapsed-box">
                                                               <div class="box-header with-border">
                                                                 <h3 class="box-title">All Kids Dresses</h3>
                                                                 <div class="box-tools pull-right">
                                                                   <button class="btn btn-box-tool"  onclick="view_kids_dress()" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                                 </div><!-- /.box-tools -->
                                                               </div><!-- /.box-header -->
                                                               <div class="box-body" id="kids_dress_table">

                                                               </div><!-- /.box-body -->
                                                             </div><!-- /.box -->



                                               </div><!-- /.col (right) -->

                                        </div>
                                        <div class="row"  id="image_kids_dress_change">

                                    </div>
                               </section>
                             </div>

                         </div>

                     </div>
                 </div>

@stop

@section('script4')
     <script type="text/javascript">
     $(document).ready(function (e) {
     	$("#uploadForm_new_arr_gents").on('submit',(function(e) {
     		e.preventDefault();
     		$.ajax({
             	url: "http://localhost/laravel/resources/views/PHP_Files/upload_new_arr.php",
     			type: "POST",
     			data:  new FormData(this),
     			contentType: false,
         	    cache: false,
     			processData:false,
     			success: function(data)
     		    {
     			$("#targetLayer_new_arr_gents").html(data);
     		    },
     		  	error: function()
     	    	{
     	    	}
     	   });
     	}));
     });
     </script>
     <script type="text/javascript">
          $(document).ready(function (e) {
          	$("#uploadForm_new_arr_wom").on('submit',(function(e) {
          		e.preventDefault();
          		$.ajax({
                  	url: "http://localhost/laravel/resources/views/PHP_Files/upload_new_arr_wom.php",
          			type: "POST",
          			data:  new FormData(this),
          			contentType: false,
              	    cache: false,
          			processData:false,
          			success: function(data)
          		    {
          			$("#targetLayer_new_arr_wom").html(data);
          		    },
          		  	error: function()
          	    	{
          	    	}
          	   });
          	}));
          });
          </script>
           <script type="text/javascript">
                    $(document).ready(function (e) {
                    	$("#uploadForm_new_arr_ki").on('submit',(function(e) {
                    		e.preventDefault();
                    		$.ajax({
                            	url: "http://localhost/laravel/resources/views/PHP_Files/upload_new_ki_arr.php",
                    			type: "POST",
                    			data:  new FormData(this),
                    			contentType: false,
                        	    cache: false,
                    			processData:false,
                    			success: function(data)
                    		    {
                    			$("#targetLayer_new_arr_ki").html(data);
                    		    },
                    		  	error: function()
                    	    	{
                    	    	}
                    	   });
                    	}));
                    });
            </script>
            <script type="text/javascript">
                                $(document).ready(function (e) {
                                	$("#uploadForm_gents_dress").on('submit',(function(e) {
                                		e.preventDefault();
                                		$.ajax({
                                        	url: "http://localhost/laravel/resources/views/PHP_Files/upload_gents_dress.php",
                                			type: "POST",
                                			data:  new FormData(this),
                                			contentType: false,
                                    	    cache: false,
                                			processData:false,
                                			success: function(data)
                                		    {
                                			$("#targetLayer_gents_dress").html(data);
                                		    },
                                		  	error: function()
                                	    	{
                                	    	}
                                	   });
                                	}));
                                });
             </script>
               <script type="text/javascript">
                                             $(document).ready(function (e) {
                                             	$("#uploadForm_wom_dress").on('submit',(function(e) {
                                             		e.preventDefault();
                                             		$.ajax({
                                                     	url: "http://localhost/laravel/resources/views/PHP_Files/upload_wom_dress.php",
                                             			type: "POST",
                                             			data:  new FormData(this),
                                             			contentType: false,
                                                 	    cache: false,
                                             			processData:false,
                                             			success: function(data)
                                             		    {
                                             			$("#targetLayer_wom_dress").html(data);
                                             		    },
                                             		  	error: function()
                                             	    	{
                                             	    	}
                                             	   });
                                             	}));
                                             });
               </script>
                <script type="text/javascript">
                                                            $(document).ready(function (e) {
                                                            	$("#uploadForm_kids_dress").on('submit',(function(e) {
                                                            		e.preventDefault();
                                                            		$.ajax({
                                                                    	url: "http://localhost/laravel/resources/views/PHP_Files/upload_kids_dress.php",
                                                            			type: "POST",
                                                            			data:  new FormData(this),
                                                            			contentType: false,
                                                                	    cache: false,
                                                            			processData:false,
                                                            			success: function(data)
                                                            		    {
                                                            			$("#targetLayer_kids_dress").html(data);
                                                            		    },
                                                            		  	error: function()
                                                            	    	{
                                                            	    	}
                                                            	   });
                                                            	}));
                                                            });
                              </script>
@stop