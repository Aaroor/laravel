<?php
$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="select * from new_gents_arrival";
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
    $val=0;
    while($row = $result->fetch_assoc()) {



        echo "<tbody>
    <tr id='".$row['new_arr_img_id']."' onclick='image_new_arr_gents_change(this.id)'>

    <td>".$val."</td>
    <td>".$row['new_arr_img_path']."</td>
    <td>".$row['new_arr_title']."</td>
    <td>".$row['new_arr_des']."</td>



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