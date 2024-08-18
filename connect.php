<?php

$con=new mysqli('localhost','root','pwdpwd','Employee_management');

  if(!$con){
    
      die(mysqli_error($con));
   }
?>