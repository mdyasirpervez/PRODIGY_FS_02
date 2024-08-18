<?php

$con=new mysqli('localhost','root','pwdpwd','users');

  if(!$con){
    
      die(mysqli_error($con));
   }
?>