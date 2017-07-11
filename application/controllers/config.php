<!DOCTYPE HTML>
<?php
    
    $s_servername="localhost";
    $s_username="root";
    $s_password="";
    $s_database="employees";
    
    $connection=mysqli_connect($s_servername,$s_username,$s_password,$s_database);
    
    if(!$connection){
       echo "Error in connection".mysqli_connect_error($connection);
    }
 
     ?>