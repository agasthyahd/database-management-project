<?php

$servername="localhost";
$username="root";
$pswrd="";
$dbname="project";

$conn=mysqli_connect($servername,$username,$pswrd,$dbname);
$id=$_GET["id"];
$name=$_GET["name"];
$salary=$_GET["salary"];
$address=$_GET["address"];
$phone=$_GET["phone"];

$q="INSERT INTO emp_details values($id,'$name',$salary,'$address',$phone)";


$check=mysqli_query($conn,$q);
if(!$check)
{
    header("Location:redirect_fail.html");
}
else{
    header("Location:redirect_succ.html");
}

?>
