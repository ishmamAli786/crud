<?php
$con=mysqli_connect("localhost","root","","practice");
if($con){
    echo "Database connected";
}
else  {
    echo "database not connected";
}
?>