<?php

$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$str = 'ABCD';
$shuffled = str_shuffle($str);
$num=rand(1,500);
$kids_dress_id=$shuffled."KD".$num;



if(isset($_POST['kids_dress_de'])&& isset($_POST['kids_dress__tit'])) {
    $kids_dress_des= $_POST['kids_dress_de'];
    $kids_dress_tit=$_POST['kids_dress__tit'];
}
if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['userImage_kids_dress']['tmp_name'])) {
        $sourcePath = $_FILES['userImage_kids_dress']['tmp_name'];

        $targetPath = "C:/wamp/www/laravel/public/Web/images/kids_dress/".$_FILES['userImage_kids_dress']['name'];

        $path="Web/images/kids_dress/".$_FILES['userImage_kids_dress']['name'];


        if(move_uploaded_file($sourcePath,$targetPath)) {
            $sql = "INSERT INTO kids_dress (kids_dress_img_id,kids_dress_img_path,kids_dress_title,kids_dress_des)
                    VALUES ('".$kids_dress_id."','".$path."','".$kids_dress_tit."','".$kids_dress_des."' )";

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