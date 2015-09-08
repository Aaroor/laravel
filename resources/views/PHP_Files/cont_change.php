<?php

$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$phone_no=$_REQUEST["ph_no"];

$sqlup="update phonecontact set phone_no='".$phone_no."' where id=1";

if (mysqli_query($conn, $sqlup)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

$sql="select * from phonecontact  where id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $phone_no=$row['phone_no'];
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
//$conn->close();
echo "<table id='example2' class='table table-bordered table-hover'>
<thead>
  <tr>
    <th>No</th>
    <th>Phone Number</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>1</td>
    <td>".$phone_no."</td>

  </tr>

</tbody>

</table>";
?>