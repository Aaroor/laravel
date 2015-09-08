<?php
$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="select * from kids_dress";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    echo " <table id='example2' class='table table-bordered table-hover'>
    <thead>
    <tr>
    <th>No</th>
    <th>Dress_image_path</th>
    <th>Dress_Title</th>
    <th>Dress_Description</th>
    </tr>
    </thead>";
    $val=0;
    while($row = $result->fetch_assoc()) {



        echo "<tbody>
    <tr id='".$row['kids_dress_img_id']."' onclick='image_kids_dress_change(this.id)'>

    <td>".$val."</td>
    <td>".$row['kids_dress_img_path']."</td>
    <td>".$row['kids_dress_title']."</td>
    <td>".$row['kids_dress_des']."</td>



    </tr>

    </tbody>

   ";
        $val=$val+1;
    }
    echo " </table>";
} else {
    echo "0 results";
}
mysqli_close($conn);

?>