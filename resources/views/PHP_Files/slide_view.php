<?php
$conn=mysqli_connect("localhost","root","newworld2014","adoraweb");

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
echo "<h1>hi cefef</h1>";
/*$sql="select * from slider";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
            echo "   <div class='carousel slide'>
            <ol class='carousel-indicators'>";

    while ($row = $result->fetch_assoc()) {



         if($row['id']==1)
         {
             $rid=$row['id']-1;
             echo "<li data-target='#main-slider' data-slide-to='".$rid."' class='active'></li>";
         }
         else
         {
             $rrid=$row['id']-1;
             echo "<li data-target='#main-slider' data-slide-to='".$rrid."'></li>";

         }
    }
       echo "</ol> <div class='carousel-inner'>";

       while ($row = $result->fetch_assoc())
       {


                echo " <div class='item active' style='background-image: url(".$row['back_img_path'].")'>
                           <div class='container'>
                               <div class='row slide-margin'>
                                   <div class='col-sm-6'>
                                       <div class='carousel-content'>
                                           <h1 style='margin-top:0px;padding-top:0px' class='animation animated-item-1'>Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                           <h2 class='animation animated-item-2'>".$row['for_img_path']."</h2>
                                           <a class='btn-slide animation animated-item-3' href='#'>Browse More</a>
                                       </div>
                                   </div>

                                   <div class='col-sm-6 hidden-xs animation animated-item-4'>
                                       <div class='slider-img'>
                                           <img src='".$row['for_img_path']."' class='img-responsive'>
                                       </div>
                                   </div>

                               </div>
                           </div>
                       </div>";
       }

}*/
?>