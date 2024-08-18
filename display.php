<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Employee Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >

</head>
<body>
<h1 style="text-align: center;">Employees Detail</h1>
    <div class="container">
        <button class="btn btn-primary my-5 float-right" ><a href="user.php" class="text-light">Click here to Add</a>
    
    </button>
    <table class="table">
  <thead style="background-color:#00FFFF;">
    <tr>
      <th scope="col"> Empolyee ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Department</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>



  <tbody>
   <?php
 $sql="SELECT * FROM employee ";
 $result=mysqli_query($con,$sql);
 if($result){
    while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $Name=$row['Name'];
    $Email=$row['Email'];
    $Age=$row['Age'];
    $Department=$row['Department'];
    $Mobileno=$row['Mobileno'];
    echo '<tr>
      <th scope="row">'.$id.'</th>
      <td> '.$Name.'</td>
      <td>'.$Email.'</td>
      <td>'.$Age.'</td>
      <td>'.$Department.'</td>
      <td>'.$Mobileno.'</td>
      <td>
    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
</td>
    </tr>';
    }

 }

   ?>



  </tbody>
</table>

    </div>
    
</body>
</html>