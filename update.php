<?php
include 'connect.php';

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $select = "SELECT * FROM employee WHERE id='$id'";
    $data = mysqli_query($con, $select);
    $row = mysqli_fetch_array($data);
} else {
    header('location:display.php'); // Redirect if no ID is provided
}

if (isset($_POST['updatebtn'])) {
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Age = $_POST['Age'];
    $Department = $_POST['Department'];
    $Mobileno = $_POST['Mobileno'];

    $stmt = $con->prepare("UPDATE employee SET Name=?, Email=?, Age=?, Department=?, Mobileno=? WHERE id=?");
    $stmt->bind_param("ssissi", $Name, $Email, $Age, $Department, $Mobileno, $id);

    if ($stmt->execute()) {
        header('location:display.php');
        exit();
    } else {
        die($con->error);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Employee Management</title>
</head>
<body>
    <div class="container my-5">
        <form action="update.php?updateid=<?php echo $id; ?>" method="POST">
            <div class="form-group">
                <label>Employee ID</label>
                <input value="<?php echo $row['id']; ?>" type="text" class="form-control" name="id" readonly>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input value="<?php echo $row['Name']; ?>" type="text" class="form-control" name="Name" required>
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input value="<?php echo $row['Email']; ?>" type="email" class="form-control" name="Email" required>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input value="<?php echo $row['Age']; ?>" type="number" class="form-control" name="Age" required>
            </div>
            <div class="form-group">
                <label>Department</label>
                <input value="<?php echo $row['Department']; ?>" type="text" class="form-control" name="Department" required>
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input value="<?php echo $row['Mobileno']; ?>" type="text" class="form-control" name="Mobileno" required>
            </div>
            <button type="submit" class="btn btn-primary" name="updatebtn">Update</button>
        </form>
    </div>
</body>
</html>
