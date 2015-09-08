<?php

$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$str = 'ABCD';
$shuffled = str_shuffle($str);
$num=rand(1,500);
$new_arr_id=$shuffled."AG".$num;



if(isset($_POST['new_arri_de'])&& isset($_POST['new_arri_tit'])) {
    $new_arr_des= $_POST['new_arri_de'];
    $new_arri_tit=$_POST['new_arri_tit'];
}
if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['userImage_new_arr']['tmp_name'])) {
        $sourcePath = $_FILES['userImage_new_arr']['tmp_name'];

        $targetPath = "C:/wamp/www/laravel/public/Web/images/new_arr_gents/".$_FILES['userImage_new_arr']['name'];

        $path="Web/images/new_arr_gents/".$_FILES['userImage_new_arr']['name'];


        if(move_uploaded_file($sourcePath,$targetPath)) {
            $sql = "INSERT INTO new_gents_arrival (new_arr_img_id,new_arr_img_path,new_arr_title,new_arr_des)
                    VALUES ('".$new_arr_id."','".$path."','". $new_arri_tit."','".$new_arr_des."' )";

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