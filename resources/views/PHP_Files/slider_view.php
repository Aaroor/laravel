<?php
$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql="select * from slider";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    echo " <table id='example2' class='table table-bordered table-hover'>
    <thead>
    <tr>
    <th>No</th>
    <th>Back_image_path</th>
    <th>for_image_path</th>
    <th>Description</th>
    </tr>
    </thead>";
while($row = $result->fetch_assoc()) {



    echo "<tbody>
    <tr id='".$row['id']."' onclick='image_change(this.id)'>

    <td>".$row['id']."</td>
    <td>".$row['back_img_path']."</td>
    <td>".$row['for_img_path']."</td>
    <td>".$row['description']."</td>



    </tr>

    </tbody>

   ";
}
    echo " </table>";
} else {
echo "0 results";
}
mysqli_close($conn);

?>