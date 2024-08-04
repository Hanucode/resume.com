<?php
require 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = $_POST['password'];
    $user_type = $_POST['user_type'];

    $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'") or die('Query failed');
    if(mysqli_num_rows($select_users) >0){
        ?>
        <script>
            alert('User Already Exist');
            window.open('register.php');
        </script>
        <?php
    }else{

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `password`, `user_type`) VALUES ('$name','$email','$pass','$user_type')") or die('query faild om register line 20');
        ?>
        <script>
            alert('Registered Successfully');
        </script>
        <?php
         header('Location: login.php');
         exit;
    }
    
}
?>

<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CV Maker | Register</title>






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

        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>



</head>

<body class="d-flex align-items-center">



    <div class="w-100">
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
        <form action="" method="post">
                <div class="d-flex gap-2 justify-content-center">
                    <img class="mb-4" src="img/logo.png" alt="" height="70">

                    <div>
                        <h1 class="h3 fw-normal my-1"><b>CV</b> Maker</h1>
                        <p class="m-0">Create your new account</p>

                    </div>
                </div>


                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingName" placeholder="" required>
                    <label for="floatingInput"><i class="bi bi-person"></i> Full Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="" required>
                    <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
                </div>
                <div class="form-floating"> 
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                </div>
                <select class="form-select form-select-sm" name="user_type" aria-label=".form-select-lg example">
                <option  selected required>Open this select menu</option>
                <option value="user">User</option>
              <option value="admin">Admin</option>
          </select>
          <hr>


                <button class="btn btn-primary w-100 py-2" name="submit" type="submit"><i class="bi bi-person-plus-fill"></i> Register
                </button>
                <div class="d-flex justify-content-between my-3">

                    <a href="forgot.php" class="text-decoration-none">Forgot Password ?</a>
                    <a href="login.php" class="text-decoration-none">Login</a>

                </div>

            </form>
        </main>

    </div>




</body>

</html>