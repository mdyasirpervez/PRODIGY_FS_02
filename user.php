<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $id=$_POST['id'];
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Age=$_POST['Age'];
  $Department=$_POST['Department'];
  $Mobileno=$_POST['Mobileno'];
  $sql="INSERT INTO employee (id,Name,Email,Age,Department,Mobileno)VALUES('$id','$Name','$Email','$Age','$Department','$Mobileno')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo"Data inserted successfully";
    header('location:display.php');
  }
  else{
    die(mysqli_error($con));
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    <title>Employee Management</title>
  </head>
  <body>
    
    <div class="container my-3" ><h1 style="text-align: center;">Employee Management System</h1></div>
    <div class="container my-6"><h4 style="background-color: #4CAF50; color: white; padding: 10px; border-radius: 8px; text-align: center; font-size: 20px; font-weight: bold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">Add Employee Details</h4></div>
    <div class="container my-5">
    <form action="user.php"method="POST">
    <div class="form-group">
    <label>Employee ID</label>
    <input type="text" class="form-control"  placeholder="Enter ID" name="id">
</div>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="Name" >
    
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  placeholder="Enter E-Mail" name="Email">
    
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" placeholder="Enter age" name="Age">
    
  </div>
  <div class="form-group">
    <label>Department</label>
    <input type="text" class="form-control" placeholder="Enter Department" name="Department">
    
  </div>
  <div class="form-group">
    <label>Mobile Number</label>
    <input type="text" class="form-control"  placeholder="Enter Mobile Number" name="Mobileno">
    
  </div>
  
  
  <!--<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>-->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>