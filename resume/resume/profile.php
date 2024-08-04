<?php 
include 'config.php';
session_start();

$user_id =  $_SESSION['user_id'];
if(!isset($admin_id)){
    header('loacation:login.php');
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

    $query = "SELECT * FROM `users`";

    $result = mysqli_query($conn,$query);
    if(!$result){
        die("QUERY FAILD".mysqli_error());
    }else{
        $row = mysqli_fetch_assoc($result);
        
    }

?>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$pass' WHERE 1 `id`= $id;";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("query faild".mysqli_error());
    }else{
        ?>
        <script>
            alert('Profile Update Succecfully');
            window.open('myresumes.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Maker | View Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            height: 100vh;
            background: rgb(249, 249, 249);
            background: radial-gradient(circle, rgba(249, 249, 249, 1) 0%, rgba(240, 232, 127, 1) 49%, rgba(246, 243, 132, 1) 100%);

        }
    </style>
</head>

<body>

    <nav class="navbar bg-body-tertiary shadow">
        <div class="container">
        <a class="navbar-brand" href="myresumes.php">
                <img src="img/logo.png" alt="Logo" height="24" class="d-inline-block align-text-top">
                Resume Builder
            </a>
            <div>
                <button class="btn btn-sm btn-dark"><i class="bi bi-person-circle"></i> My Profile</button>
               <a href="logout.php"> <button class="btn btn-sm btn-danger"><i class="bi bi-box-arrow-left"></i> Logout</button></a>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Edit Profile</h5>
                <div>
                    <a href="myresumes.php" class="text-decoration-none"><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>

            <div>

                <form class="row g-3 p-3">

                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Dev Ninja" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email'];?>" placeholder="dev@abc.com" class="form-control">
                    </div>
                    <div class="col-12">
                        <label class="form-label">New Password</label>
                        <input type="password" name="pass" value="<?php echo $row['password'];?>" min="1111111111" placeholder="Enter your password" max="9999999999"
                            class="form-control">
                    </div>




                    <div class="col-12 text-end">
                        
                        View Profile
                    </div>
                </form>
            </div>





        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>