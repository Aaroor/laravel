<?php
$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$str = 'ABCD';
$shuffled = str_shuffle($str);
$num=rand(1,500);
$rece_id=$shuffled."RE".$num;



if(isset($_POST['text_des_recent'])&&isset($_POST['des_text'])) {
$text_des= $_POST['text_des_recent'];
    $des_text=$_POST['des_text'];
}
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage_re']['tmp_name']) ) {
$sourcePath = $_FILES['userImage_re']['tmp_name'];

$targetPath = "C:/wamp/www/laravel/public/Web/images/recent_image/".$_FILES['userImage_re']['name'];
$path="Web/images/recent_image/".$_FILES['userImage_re']['name'];

if(move_uploaded_file($sourcePath,$targetPath) ) {
$sql = "INSERT INTO recent_work (recent_img_id,recent_img_path,des_title,description)
VALUES ('".$rece_id."','".$path."','".$des_text."','".$text_des."' )";

if ($conn->query($sql) === TRUE) {
echo "<div class='alert alert-success alert-dismissable'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <h4>	<i class='icon fa fa-check'></i>Successfully Upload</h4>
    Successfully Add Your Images To Recent Work.
</div>";
} else {
echo "<div class='alert alert-danger alert-dismissable'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <h4>	<i class='icon fa fa-ban'></i>Upload Error!</h4>
    You Have Some problems In Uploading Process
</div>";
}


$conn->close();



}
}
}
?>