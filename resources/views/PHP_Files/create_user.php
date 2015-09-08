<?php
$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$str = 'ABCD';
$shuffled = str_shuffle($str);
$num=rand(1,500);
$user_id=$shuffled."US".$num;
if(isset($_POST['u_name'])&&isset($_POST['u_email'])&&isset($_POST['u_password'])) {
    $u_name= $_POST['u_name'];
    $u_email= $_POST['u_email'];
    $u_pass=$_POST['u_password'];
    $u_type="admin";

}

$sql = "INSERT INTO users (user_id,username,email,password,user_type)
                    VALUES ('".$user_id."','".$u_name."','".$u_email."','".$u_pass."','".$u_type."')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4>	<i class='icon fa fa-check'></i>Successfully Add User</h4>
            Successfully Add New Admin User.
            </div>";
} else {
    echo "<div class='alert alert-danger alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4>	<i class='icon fa fa-ban'></i>Upload Error!</h4>
            You Have Some problems In Uploading Process
            </div>";
}
$sql1="select * from users";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
// output data of each row
    echo " <table id='example2' class='table table-bordered table-hover'>
    <thead>
    <tr>
    <th>No</th>
    <th>Admin_Username</th>
    <th>Admin_Email</th>
    <th>Admin_Type</th>
    </tr>
    </thead>";
    $count=0;
    while($row = $result->fetch_assoc()) {



        echo "<tbody>
    <tr id='".$row['id']."'>

    <td>".$count."</td>
    <td>".$row['username']."</td>
    <td>".$row['email']."</td>
    <td>".$row['user_type']."</td>



    </tr>

    </tbody>

   ";
        $count=$count+1;
    }
    echo " </table>";
} else {
    echo "0 results";
}
mysqli_close($conn);

?>