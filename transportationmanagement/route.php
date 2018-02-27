<?php

$servername="localhost";
$username="root";
$pswrd="";
$dbname="project";

$conn=mysqli_connect($servername,$username,$pswrd,$dbname);
$id=$_GET["r_id"];
$from=$_GET["from"];
$to=$_GET["to"];
$dist=$_GET["dist"];


$q="INSERT INTO route_information values($id,'$from','$to',$dist)";


$check=mysqli_query($conn,$q);
if(!$check)
{
    header("Location:redirectr_fail.html");
}
else{
    header("Location:redirectr_succ.html");
}

?>
