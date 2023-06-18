<?php

if($_GET["name"]=="aadi"&& $_GET["pswrd"]=="password" )
{   
   
    header("Location:menu.html");
}
else{
    
    header("Location:index.html");
}
?>