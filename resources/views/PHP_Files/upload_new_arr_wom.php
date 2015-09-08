<?php

$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$str = 'ABCD';
$shuffled = str_shuffle($str);
$num=rand(1,500);
$new_arr_wom_id=$shuffled."AW".$num;



if(isset($_POST['new_arri_wom_tit'])&& isset($_POST['new_arri_wom_de'])) {
    $new_arr_wom_des= $_POST['new_arri_wom_de'];
    $new_arri_wom_tit=$_POST['new_arri_wom_tit'];
}
if(is_array($_FILES)) {
    if(is_uploaded_file($_FILES['userImage_new_wom_arr']['tmp_name'])) {
        $sourcePath = $_FILES['userImage_new_wom_arr']['tmp_name'];

        $targetPath = "C:/wamp/www/laravel/public/Web/images/new_arr_wom/".$_FILES['userImage_new_wom_arr']['name'];

        $path="Web/images/new_arr_wom/".$_FILES['userImage_new_wom_arr']['name'];


        if(move_uploaded_file($sourcePath,$targetPath)) {
            $sql = "INSERT INTO new_wome_arrival (new_arr_wom_img_id,new_arr_wom_img_path,new_arr_wom_title,new_arr_wom_des)
                    VALUES ('".$new_arr_wom_id."','".$path."','". $new_arri_wom_tit."','".$new_arr_wom_des."' )";

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