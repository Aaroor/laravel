<?php
$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id=$_REQUEST["im_no"];
$sql="select * from slider where id='".$id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row

    while ($row = $result->fetch_assoc()) {

       echo "<div class='col-md-6'>
              <div class='box box-default collapsed-box'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Background Image</h3>
                  <div class='box-tools pull-right'>
                    <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class='box-body'>
                    <div class='col-md-10'>
                        <div class='thumbnail'>
                        <img class='img-responsive'  src='".$row['back_img_path']."' alt=''>

                        </div>
                    </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->





        </div><!-- /.col (right) -->
        <div class='col-md-6'>
              <div class='box box-default collapsed-box'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Forground Image</h3>
                  <div class='box-tools pull-right'>
                    <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-plus'></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class='box-body'>

                        <div class='col-md-10'>

                           <div class='thumbnail'>
                               <img class='img-responsive' src='".$row['for_img_path']."' alt=''>
                           </div>
                        </div>


                </div>
              </div>
        </div>";

    }
    $conn->close();
}

?>