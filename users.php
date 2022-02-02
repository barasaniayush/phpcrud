<?php
    include('connect.php');
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO `crud` (id, name, email, password, phone) VALUES ('$id', '$name', '$email', '$password', '$phone')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            header('location:index.php');
        }; 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add user</title>
</head>
<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group my-3">
                <label>Name</label>
                <input type="text" placeholder="Enter full name" class="form-control" id="name" name="name">
             </div>
            <div class="form-group my-3">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
             </div>
            <div class="form-group my-3">
                <label>Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group my-3">
                <label>Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
             </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>