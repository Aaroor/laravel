<?php

$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$str = 'ABCD';
$shuffled = str_shuffle($str);
$num=rand(1,500);
$new_arr_ki_id=$shuffled."AK".$num;



if(isset($_POST['new_arri_ki_tit'])&& isset($_POST['new_arri_ki_de'])) {
    $new_arr_ki_des= $_POST['new_arri_ki_tit'];
    $new_arri_ki_tit=$_POST['new_arri_ki_de'];
}
if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['userImage_new_ki_arr']['tmp_name'])) {
        $sourcePath = $_FILES['userImage_new_ki_arr']['tmp_name'];

        $targetPath = "C:/wamp/www/laravel/public/Web/images/new_arr_ki/".$_FILES['userImage_new_ki_arr']['name'];

        $path="Web/images/new_arr_ki/".$_FILES['userImage_new_ki_arr']['name'];


        if(move_uploaded_file($sourcePath,$targetPath)) {
            $sql = "INSERT INTO new_ki_arrival (new_arr_ki_img_id,new_arr_ki_img_path,new_arr_ki_title,new_arr_ki_des)
                    VALUES ('".$new_arr_ki_id."','".$path."','". $new_arri_ki_tit."','".$new_arr_ki_des."' )";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4>	<i class='icon fa fa-check'></i>Successfully Upload</h4>
            Successfully Add Your Images To Slider
            </div>";
            } else {
                echo "<div class='alert alert-danger alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4>	<i class='icon fa fa-ban'></i>Upload Error!</h4>
            You Have Some problems In Uploading Process...
            </div>";
            }


            $conn->close();



        }
    }
}
?>