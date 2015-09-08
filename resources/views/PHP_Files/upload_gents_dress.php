<?php

$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$str = 'ABCD';
$shuffled = str_shuffle($str);
$num=rand(1,500);
$gents_dress_id=$shuffled."GD".$num;



if(isset($_POST['gents_dress_de'])&& isset($_POST['gents_dress__tit'])) {
    $gents_dress_des= $_POST['gents_dress_de'];
    $gents_dress_tit=$_POST['gents_dress__tit'];
}
if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['userImage_gents_dress']['tmp_name'])) {
        $sourcePath = $_FILES['userImage_gents_dress']['tmp_name'];

        $targetPath = "C:/wamp/www/laravel/public/Web/images/gents_dress/".$_FILES['userImage_gents_dress']['name'];

        $path="Web/images/gents_dress/".$_FILES['userImage_gents_dress']['name'];


        if(move_uploaded_file($sourcePath,$targetPath)) {
            $sql = "INSERT INTO gents_dress (gents_dress_img_id,gents_dress_img_path,gents_dress_title,gents_dress_des)
                    VALUES ('".$gents_dress_id."','".$path."','".$gents_dress_tit."','".$gents_dress_des."' )";

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