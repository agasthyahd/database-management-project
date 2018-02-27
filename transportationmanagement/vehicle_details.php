<?php

$servername="localhost";
$username="root";
$pswrd="";
$dbname="project";

$conn=mysqli_connect($servername,$username,$pswrd,$dbname);
$id=$_GET["id"];
$name=$_GET["name"];
$model=$_GET["model"];

$q="INSERT INTO vehicle values($id,'$name','$model')";


$check=mysqli_query($conn,$q);
if(!$check)
{
    header("Location:redirectv_fail.html");
}
else{
    header("Location:redirectv_succ.html");
}

?>