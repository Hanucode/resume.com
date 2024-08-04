<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}


/* fetch data  */
$query = "SELECT * FROM `form`";
$res = mysqli_query($conn,$query);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Maker | Admin Resumes</title>
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
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" height="24" class="d-inline-block align-text-top">
                CVBuilder
            </a>
            <div>
                <a href="profile.php"><button class="btn btn-sm btn-dark"><i class="bi bi-person-circle"></i> Profile : </button></a>
                <a href="logout.php"><button class="btn btn-sm btn-danger"><i class="bi bi-box-arrow-left"></i> Logout</button></a>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Resumes</h5>
                <div>
                    <a href="createresume.php" class="text-decoration-none"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                </div>
            </div>



            <div class="text-center py-3 border rounded mt-3" style="background-color: rgba(236, 236, 236, 0.56);">
                <i class="bi bi-file-text"></i> Available Resumes.. 
            </div>


            <div class="d-flex flex-wrap">
                <?php
                while ($row = mysqli_fetch_assoc($res))
                {
                    ?>


                <div class="col-12 col-md-6 p-2">
                    <div class="p-2 border rounded">
                        <h5><?php echo $row['name'];?> Resumes</h5>
                        <p class="small text-secondary m-0" style="font-size:12px"><i class="bi bi-clock-history"></i>
                           User Email : <?php echo $row['email']; ?>
                        </p>
                        <div class="d-flex gap-2 mt-1">
                            <a href="resume.php?id=<?php echo $row['id'];?>" class="text-decoration-none small"><i class="bi bi-file-text"></i> Open</a>
                            <a href="edit.php?id=<?php echo $row['id'];?>" class="text-decoration-none small"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="delete.php?id=<?php echo $row['id'];?>" class="text-decoration-none small"><i class="bi bi-trash2"></i> Delete</a>
                            <a href="" class="text-decoration-none small"><i class="bi bi-share"></i> Share</a>
                            <a href="resume.php?id=<?php echo $row['id'];?>" download="resume.php?id=<?php echo $row['id'];?>" class="text-decoration-none small"><i class="bi bi-copy"></i> Download</a>

                        </div>
                    </div>
                </div>
                <?php
                }
                ?>         
            </div>

        </div>

    </div>

</body>

</html>