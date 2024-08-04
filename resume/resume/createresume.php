<?php 
include 'config.php';
session_start();

$user_id =  $_SESSION['user_id'];
if(!isset($user_id)){
    header('loacation:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Maker | CreateResume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            height: 100vh;
            background: rgb(249, 249, 249);
            background: radial-gradient(circle, rgba(249, 249, 249, 1) 0%, rgba(240, 232, 127, 1) 49%, rgba(246, 243, 132, 1) 100%);

        }
        .a{
            color:#fff;
            font-size:1rem;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <nav class="navbar bg-body-tertiary shadow">
        <div class="container">
        <a class="navbar-brand" href="myresumes.php">
                <img src="logo.png" alt="Logo" height="24" class="d-inline-block align-text-top">
                Resume Builder
            </a>
            <div>
            <?php
                $sql = "SELECT * FROM users";
                $query = mysqli_query($conn,$sql);
                $resul = mysqli_fetch_assoc($query);
                ?>
                <button class="btn btn-sm btn-dark"><i class="bi bi-person-circle"></i> <?php echo $resul['email']; ?></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-box-arrow-left"></i> <a href="logout.php" class="a"> Logout</a> </button>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Create Resume</h5>
                <div>
                    <a href="myresumes.php" class="text-decoration-none"><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>

            <div>

                <form class="row g-3 p-3" action="" method="post">
                    <h5 class="mt-3 text-secondary"><i class="bi bi-person-badge"></i> Personal Information</h5>
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" placeholder="email@abc.com" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Mobile No</label>
                        <input type="number" min="1111111111" placeholder="+91-7018584903" max="9999999999"
                            class="form-control" name="number" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Transgender">Transgender</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Religion</label>
                        <select class="form-select" name="religion" required>
                            <option value="Hindu">Hindu</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Christian">Christian</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nationality</label>
                        <select class="form-select" name="nationality" required>
                            <option value="Indian">Indian</option>
                            <option value="Non Indian">Non Indian</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Marital Status</label>
                        <select class="form-select" name="status" required>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Hobbies</label>
                        <input type="text" placeholder="Reading Books, Watching Movies" class="form-control" name="hobbies" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Languages Known</label>
                        <input type="text" placeholder="Hindi,English" class="form-control" name="languages" required>
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">School Name</label>
                        <input type="text" placeholder="enter your school name" class="form-control" name="school" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Completed 12th Class in (Stream)</label>
                        <select class="form-select" name="stream" required>
                            <option value="Arts">Arts</option>
                            <option value="Non Medical">Non Medical</option>
                            <option value="Cumers">Cumers</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">12th Passed in</label>
                        <input type="date" class="form-control" name="thdob" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Skill</label>
                        <select class="form-select" name="skill" required>
                            <option value=" Basic Knowledge in Computer & Internet">Basic Knowledge in Computer & Internet</option>
                            <option value="Html,Css,java">Html,Css,java</option>
                            <option value="javascript developer Fast larner,">javascript developer</option>
                            <option value="Php Developer Wordpress or Html , css">Backend developer by Php</option>
                        </select>
                    </div>
                    <hr>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"><h4>Experience</h4> </label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Do u have any experience or Fresher type here" name="experience" required>
                    </div>
                    </div>

                    

                    <div class="d-flex flex-wrap">



                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Web Developer Consultant (2+ Years)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-buildings"></i> Dominos,New Delhi (October 2020 - Currently
                                    Pursuing)
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Handling customers and fulfilling their needs
                                </p>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Web Developer Consultant (2+ Years)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-buildings"></i> Dominos,New Delhi (October 2020 - Currently
                                    Pursuing)
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Handling customers and fulfilling their needs
                                </p>

                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5 class=" text-secondary"><i class="bi bi-journal-bookmark"></i> Education</h5>
                        <div>
                            <a href="" class="text-decoration-none"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">



                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Completed 12th Class (Arts Stream)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-book"></i> Central Board Of Secondary Education, New Delhi
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Passed / Completed In 2023
                                </p>

                            </div>
                        </div>

                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Completed 12th Class (Arts Stream)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-book"></i> Central Board Of Secondary Education, New Delhi
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Passed / Completed In 2023
                                </p>

                            </div>
                        </div>


                    </div>

                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5 class=" text-secondary"><i class="bi bi-boxes"></i> Skills</h5>
                        <div>
                            <a href="" class="text-decoration-none"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">



                        <div class="col-12 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6><i class="bi bi-caret-right"></i> Basic Knowledge in Computer & Internet</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6><i class="bi bi-caret-right"></i> Basic Knowledge in Computer & Internet</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>
                            </div>
                        </div>




                    </div>



                    <div class="col-12 text-end">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Save
                            Resume</button>
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

<?php

require 'config.php';

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $status = $_POST['status'];
    $hobbies = $_POST['hobbies'];
    $languages = $_POST['languages'];
    $address = $_POST['address'];
    $school = $_POST['school'];
    $stream = $_POST['stream'];
    $thdob = $_POST['thdob'];
    $skill = $_POST['skill'];
    $experience = $_POST['experience'];

    $qry = "INSERT INTO `form` (`name`, `email`, `number`, `dob`, `gender`, `religion`, `nationality`, `status`, `hobbies`, 
    `languages`, `address`, `school`, `stream`, `12thdob`, `skill`, `experience`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";


    $stmt = mysqli_prepare($conn, $qry);
    mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $name, $email, $number, $dob, $gender, $religion, $nationality, $status, $hobbies, $languages, $address, $school, $stream, $thdob, $skill, $experience);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
       ?>
        <script>
            alert('Data Send Successfully');
            window.open('myresumes.php');
        </script>
        <?php
    } else {
       ?>
        <script>
            alert('Sorry, data could not be sent. Please try later.');
        </script>
        <?php
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>