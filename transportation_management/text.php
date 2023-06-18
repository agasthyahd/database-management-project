

 <?php

 $servername="localhost";
$username="root";
$pswrd="";
$dbname="project";
$sum=0;

$conn=mysqli_connect($servername,$username,$pswrd,$dbname);

$sql="SELECT * from booking ";
$sql1="SELECT SUM(price) as t from booking";
$res=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($res);



$result=mysqli_query($conn,$sql);

?>
<html>
    <head>
        <title>display</title>
        <link rel="stylesheet" type="text/css" href="style.css">
               <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> 
        <head>

<body>
<div class="text">
 <?php   
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
      
          <div class="login " >    
        <?php
        $color="yellow";
        echo "<table bgcolor=$color><tr><td>BOOKING ID :</td><td>".$row["booking_id"]."</td></tr>";
        echo "<tr><td>DRIVER ID  :</td><td>".$row["id"]."</td></tr>";
        echo "<tr><td>VEHICLE ID :</td><td>".$row["v_id"]."</td></tr>";
        echo "<tr><td>ROUTE ID   :</td><td>".$row["route_id"]."</td></tr>";
        echo "<tr><td>REVENUE    :</td><td>".$row["price"]."</td></tr></table>";
        echo "<hr>";
        
        echo "</div>";
        echo "<br>";}}
    
 else { 
    echo "0 results";}  ?>


    
</div>
<div class=""><?php echo "TOTAL REVENUE :".$row1["t"]; ?>
</body>
</html>