<?php

$servername="localhost";
$username="root";
$pswrd="";
$dbname="project";

$conn=mysqli_connect($servername,$username,$pswrd,$dbname);
$b_id=$_GET["b_id"];
$d_id=$_GET["d_id"];
$v_id=$_GET["v_id"];
$r_id=$_GET["r_id"];

$cost=$_GET["cost"];

$q="INSERT INTO booking values($b_id,$d_id,$v_id,'$r_id',$cost)";


$check=mysqli_query($conn,$q);
if(!$check)
{
    header("Location:redirectb_fail.html");
}
else{
    header("Location:redirectb_succ.php");
}

?>