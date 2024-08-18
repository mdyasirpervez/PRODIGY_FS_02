<?php
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
include 'partials/_dbconnect.php';
$Username=$_POST["Username"];
$Email=$_POST["Email"];
$Password=$_POST["Password"];
$cpassword=$_POST["cpassword"];
//$exist=false;

//check whether this username exist or not
$existSql="SELECT * FROM `users` WHERE Username = '$Username'";
$result=mysqli_query($con,$existSql);
$numExistRows=mysqli_num_rows($result);
if($numExistRows>0){
  //$exists=true;
  echo '<div class="alert alert-warning" role="alert">
     <h4 class="alert-heading">Error</h4>
     <p> Username already exist.</p>  
    </div>';
  
}
else{
  //$exists=false;
if($Password==$cpassword ){
  $hash=password_hash($Password,PASSWORD_DEFAULT);
  $sql="INSERT INTO `users` ( `username`, `email`, `password`, `dt`) VALUES ( '$Username', '$Email', '$hash',current_timestamp())";
  $result=mysqli_query($con,$sql);
  echo '<div class="alert alert-success" role="alert">
     <h4 class="alert-heading">Well done!</h4>
     <p> Your account is now created and you can login.</p>  
    </div>';
  
}
else{
  echo '<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Error!</h4>
  <p> Passwords do not match or Username Already Exist.</p>  
 </div>';

  
}
}


}

?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  
  <body>
    <?php require 'partials/_nav.php'?>
   
    
    
    
    

    <div class="container my-4">
        <div><h1 class="text-center ">Signup to our website</h1></div>
        <form action="/loginsystem/signup.php" method="POST">
  <div class="form-group ">
    <label for="Username">Username</label>
    <input type="text" maxlength="11" class="form-control" placeholder="Enter username"id="Username" name="Username"aria-describedby="emailHelp">
  </div>

   <div class="form-group ">
    <label for="Email">Email address</label>
    <input type="email" class="form-control" placeholder="Enter E-Mail" id="Email" name="Email"aria-describedby="emailHelp">   
  </div>

  <div class="form-group ">
    <label for="Password">Password</label>
    <input type="password" class="form-control" placeholder="Enter Password"id="Password" name="Password">
    <small id="emailHelp" class="form-text text-muted">Make sure to type correct password</small>
  </div>

  <div class="form-group ">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" placeholder="Re-enter Your Password"id="cpassword" name="cpassword">
  </div>
  
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>

    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>