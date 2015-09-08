<?php

$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$str = 'ABCD';
$shuffled = str_shuffle($str);
$num=rand(1,500);
$back_id=$shuffled."BA".$num;
$front_id=$shuffled."FR".$num;


if(isset($_POST['text_des'])) {
    $text_des= $_POST['text_des'];
}
if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['userImage']['tmp_name'])&& is_uploaded_file($_FILES['userImage1']['tmp_name']) ) {
        $sourcePath = $_FILES['userImage']['tmp_name'];
        $sourcePath1 = $_FILES['userImage1']['tmp_name'];
        $targetPath = "C:/wamp/www/laravel/public/Web/images/slider_image/background/".$_FILES['userImage']['name'];
        $targetPath1="C:/wamp/www/laravel/public/Web/images/slider_image/forground/".$_FILES['userImage1']['name'];
        $path="Web/images/slider_image/background/".$_FILES['userImage']['name'];
        $path1="Web/images/slider_image/forground/".$_FILES['userImage1']['name'];

        if(move_uploaded_file($sourcePath,$targetPath)&& move_uploaded_file($sourcePath1,$targetPath1) ) {
            $sql = "INSERT INTO slider (back_img_id,for_img_id,back_img_path,for_img_path,description)
                    VALUES ('".$back_id."', '".$front_id."','".$path."','".$path1."','".$text_des."' )";

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