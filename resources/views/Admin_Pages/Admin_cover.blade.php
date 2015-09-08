@extends('Admin_Pages.master_admin_con')
     @section('header_sidebar')
                 <li><a href="{{ action("PagesController@master_admin_con") }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
                 <li class="active"><a href="{{ action("PagesController@showCover_page") }}"><i class="fa fa-list-alt"></i> <span>Cover Page</span></a></li>
                 <li><a href="{{ action("PagesController@showAbout_page") }}"><i class="fa fa-list-alt"></i> <span>About Page</span></a></li>
                 <li><a href="{{ action("PagesController@showContact_page") }}"><i class="fa fa-list-alt"></i> <span>Contact Page</span></a></li>
                 <li><a href="{{ action("PagesController@showContant_page") }}"><i class="fa fa-list-alt"></i> <span>Service Page</span></a></li>
                 @if (Session::get('key.b')== 'superadmin')
                                  <li><a href="{{ action("PagesController@showUser_page") }}"><i class="fa fa-list-alt"></i> <span>Admin User Control</span></a></li>
                             @endif
     @stop

     @section('content')
                <div class="row">
c
                     <div class="col-lg-12">

                         <ul id="myTab" class="nav nav-tabs nav-justified">
                             <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Common Changes</a>
                             </li>
                             <li class="" onclick="view_contant()"><a href="#service-two"  data-toggle="tab"><i class="fa fa-car"></i> Slider Changes</a>
                             </li>
                             <li class="" onclick="view_recent_work()"><a href="#service-three" data-toggle="tab"><i class="fa fa-car"></i> Recent Work Changes</a>
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
                                                          <h3 class="box-title">Change contact number</h3>
                                                        </div>
                                                    <div class="box-body">



                                                         <div class="input-group">
                                                            <div class="form-group">
                                                                <label>Contact Number:</label>
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-phone"></i>
                                                                  </div>
                                                                  <input type="text" id="ph_no" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                                                            </div>
                                                            <br> <br>
                                                            <button class="btn btn-success" onclick="change_phone_no()">Submit</button>
                                                         </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
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
                                                                                        <td>{{$values->phone_no}}</td>

                                                                                      </tr>

                                                                                    </tbody>

                                                                                  </table>

                                                            </div><!-- /.box-body -->
                                                          </div><!-- /.box -->
                                            </div><!-- /.col (right) -->
                                        </div>
                                   </section>
                             </div>
                             <div class="tab-pane fade" id="service-two">

                                 <section class="content">
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="box box-danger">
                                                             <div class="box-header">
                                                               <h3 class="box-title">Change Slide Background Image</h3>
                                                             </div>
                                                         <div class="box-body">


                                                              <form id="uploadForm" action="upload.php" method="post">
                                                                    <div class="box-body">

                                                                      <div class="form-group">
                                                                        <label for="exampleInputFile">Choose background image</label>
                                                                        <input type="file" id="back_img_val" name="userImage" onchange="back_readURL(this)">
                                                                        <p class="help-block" style="color:green">Example block-level help text here.</p>
                                                                      </div>
                                                                       <div class="form-group">
                                                                          <label for="exampleInputFile">Choose forground image</label>
                                                                          <input type="file" id="front_img" name="userImage1"  onchange="front_readURL(this)">
                                                                          <p class="help-block">Example block-level help text here.</p>
                                                                       </div>



                                                                      <div class="form-group">
                                                                        <label>Give Some Description</label>
                                                                        <textarea class="form-control" rows="3" name="text_des" placeholder="Enter ..."></textarea>
                                                                      </div>

                                                                    </div><!-- /.box-body -->

                                                                    <div class="box-footer">
                                                                     <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
                                                                      <input type="submit" value="Submit" class="btn btn-primary" />
                                                                    </div>
                                                                    <div id="targetLayer"></div>
                                                              </form>




                                                         </div>
                                                     </div>
                                                 </div>

                                                 <div class="col-md-6">
                                                               <div class="box box-primary">
                                                                 <div class="box-header">
                                                                   <h3 class="box-title">Current Images</h3>
                                                                 </div>
                                                                 <div class="box-body">

                                                                                <div class="col-md-10">

                                                                                           <div class="thumbnail">
                                                                                               <img class="img-responsive" id="back_pr_img" src="http://placehold.it/750x450" alt="">
                                                                                           </div>
                                                                                </div>
                                                                                <div class="col-md-7">

                                                                                    <div class="thumbnail">
                                                                                    <img class="img-responsive" id="front_pr_img" src="http://placehold.it/750x450" alt="">
                                                                                    </div>
                                                                                </div>



                                                                           <!--    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">-->



                                                                 </div><!-- /.box-body -->
                                                               </div><!-- /.box -->
                                                 </div><!-- /.col (right) -->
                                             </div>
                                             <div class="row">

                                                    <div class="col-md-12">
                                                                  <div class="box box-default collapsed-box">
                                                                    <div class="box-header with-border">
                                                                      <h3 class="box-title">Expandable</h3>
                                                                      <div class="box-tools pull-right">
                                                                        <button class="btn btn-box-tool"  onclick="view_contant()" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                                      </div><!-- /.box-tools -->
                                                                    </div><!-- /.box-header -->
                                                                    <div class="box-body" id="dis_slider_table">

                                                                    </div><!-- /.box-body -->
                                                                  </div><!-- /.box -->



                                                    </div><!-- /.col (right) -->

                                             </div>
                                             <div class="row"  id="image_change">

                                             </div>
                                  </section>
                             </div>
                             <div class="tab-pane fade" id="service-three">
                                  <section class="content">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <div class="box box-danger">
                                                       <div class="box-header">
                                                         <h3 class="box-title">Add recent work image</h3>
                                                       </div>
                                                   <div class="box-body">


                                                        <form id="uploadForm_res" action="upload_recent.php" method="post">
                                                              <div class="box-body">

                                                                <div class="form-group">
                                                                  <label for="exampleInputFile">Choose Image</label>
                                                                  <input type="file" id="back_img_val" name="userImage_re" onchange="recent_work(this)">
                                                                  <p class="help-block" style="color:green">Example block-level help text here.</p>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="exampleInputFile">Description Title</label>
                                                                  <input type="text"  name="des_text" >

                                                                </div>


                                                                <div class="form-group">
                                                                  <label>Enter Description</label>
                                                                  <textarea class="form-control" rows="3" name="text_des_recent" placeholder="Enter ..."></textarea>
                                                                </div>

                                                              </div><!-- /.box-body -->

                                                              <div class="box-footer">
                                                               <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
                                                                <input type="submit" value="Submit" class="btn btn-primary" />
                                                              </div>
                                                              <div id="targetLayer_recent"></div>
                                                        </form>




                                                   </div>
                                               </div>
                                           </div>

                                           <div class="col-md-6">
                                                         <div class="box box-primary">
                                                           <div class="box-header">
                                                             <h3 class="box-title">Current Images</h3>
                                                           </div>
                                                           <div class="box-body">

                                                                          <div class="col-md-10">

                                                                                     <div class="thumbnail">
                                                                                         <img class="img-responsive" id="recent_img" src="http://placehold.it/750x450" alt="">
                                                                                     </div>
                                                                          </div>




                                                                     <!--    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">-->



                                                           </div><!-- /.box-body -->
                                                         </div><!-- /.box -->
                                           </div><!-- /.col (right) -->
                                       </div>
                                       <div class="row">

                                              <div class="col-md-12">
                                                            <div class="box box-default collapsed-box">
                                                              <div class="box-header with-border">
                                                                <h3 class="box-title">Expandable</h3>
                                                                <div class="box-tools pull-right">
                                                                  <button class="btn btn-box-tool"  onclick="view_recent_work()" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                                </div><!-- /.box-tools -->
                                                              </div><!-- /.box-header -->
                                                              <div class="box-body" id="dis_recent_table">

                                                              </div><!-- /.box-body -->
                                                            </div><!-- /.box -->



                                              </div><!-- /.col (right) -->

                                       </div>
                                       <div class="row"  id="recent_image_change">

                                       </div>
                                  </section>
                             </div>

                         </div>

                     </div>
                 </div>
     @stop
     @section('script1')
     <script type="text/javascript">
     $(document).ready(function (e) {
     	$("#uploadForm").on('submit',(function(e) {
     		e.preventDefault();
     		$.ajax({
             	url: "http://localhost/laravel/resources/views/PHP_Files/upload.php",
     			type: "POST",
     			data:  new FormData(this),
     			contentType: false,
         	    cache: false,
     			processData:false,
     			success: function(data)
     		    {
     			$("#targetLayer").html(data);
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
          	$("#uploadForm_res").on('submit',(function(e) {
          		e.preventDefault();
          		$.ajax({
                  	url: "http://localhost/laravel/resources/views/PHP_Files/upload_recent.php",
          			type: "POST",
          			data:  new FormData(this),
          			contentType: false,
              	    cache: false,
          			processData:false,
          			success: function(data)
          		    {
          			$("#targetLayer_recent").html(data);
          		    },
          		  	error: function()
          	    	{
          	    	}
          	   });
          	}));
          });
          </script>
     @stop