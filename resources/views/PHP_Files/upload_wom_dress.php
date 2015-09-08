<?php

$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$str = 'ABCD';
$shuffled = str_shuffle($str);
$num=rand(1,500);
$wom_dress_id=$shuffled."GD".$num;



if(isset($_POST['wom_dress_de'])&& isset($_POST['wom_dress__tit'])) {
    $wom_dress_des= $_POST['wom_dress_de'];
    $wom_dress_tit=$_POST['wom_dress__tit'];
}
if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['userImage_wom_dress']['tmp_name'])) {
        $sourcePath = $_FILES['userImage_wom_dress']['tmp_name'];

        $targetPath = "C:/wamp/www/laravel/public/Web/images/womens_dress/".$_FILES['userImage_wom_dress']['name'];

        $path="Web/images/womens_dress/".$_FILES['userImage_wom_dress']['name'];


        if(move_uploaded_file($sourcePath,$targetPath)) {
            $sql = "INSERT INTO women_dress (women_dress_img_id,women_dress_img_path,women_dress_title,women_dress_des)
                    VALUES ('".$wom_dress_id."','".$path."','".$wom_dress_tit."','".$wom_dress_des."' )";

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