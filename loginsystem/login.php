<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
include 'partials/_dbconnect.php';
$Username=$_POST["Username"];
$Password=$_POST["Password"];

  //$sql="SELECT * FROM users WHERE Username='$Username' AND Password='$Password'";
  $sql="SELECT * FROM users WHERE Username='$Username'";
  $result=mysqli_query($con,$sql);
  $num=mysqli_num_rows($result);
  if($num==1){
    while($row=mysqli_fetch_array($result)){
      if(password_verify($Password,$row['password'])){
        $login=true;
        echo '<div class="alert alert-success" role="alert">
     <h4 class="alert-heading">You are Logged in</h4> 
    </div>';
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['Username']=$Username;
    header("location:welcome.php");
      }
      else{
        echo '<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Warning!</h4>
        <p> Invalid Credentials</p>  
       </div>';
        } 
    }
     
  }
  else{
    echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Warning!</h4>
    <p> Invalid Credentials</p>  
   </div>';
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

    <title>Login</title>
  </head>
  
  <body>
    <?php require 'partials/_nav.php'?>
   
    <div class="container my-4">
    <div class="mb-4"><h1 class="text-center">Login to our website</h1></div>
    <div class="d-flex justify-content-center">
        <div style="border: 1px solid #ccc; padding: 20px; border-radius: 10px; max-width: 400px; width: 100%;">
            <form action="/loginsystem/login.php" method="POST">
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" placeholder="Enter username" id="Username" name="Username" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" id="Password" name="Password">
                    <small id="emailHelp" class="form-text text-muted">Make sure to type the correct password</small>
                </div>

                <button type="submit" class="btn" style="background-color: orange; color: blue;">Login</button>
            </form>
        </div>
    </div>
</div>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>