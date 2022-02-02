<?php
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Project</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="users.php">ADD USER</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM crud";
                    $result = mysqli_query($conn, $sql);
                    if($result) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $password = $row['password'];
                            $phone = $row['phone'];

                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$password.'</td>
                                <td>'.$phone.'</td>
                                <td><button class="btn btn-primary"><a href="update.php?updateid='.$id.'">Update</a></button>
                                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'">Delete</a></button></td>
                                </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>