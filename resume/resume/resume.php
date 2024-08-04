<?php 
include 'config.php';
session_start();

$user_id =  $_SESSION['user_id'];
if(!isset($user_id)){
    header('loacation:login.php');
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

    $query = "SELECT * FROM `form` WHERE `id` = '$id'";

    $result = mysqli_query($conn,$query);
    if(!$result){
        die("QUERY FAILD".mysqli_error());
    }else{
        $row = mysqli_fetch_assoc($result);
        
    }

?>
<?php
if(isset($_POST['update_students'])){
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

    $query = "UPDATE `form` SET `name`='$name',`email`='$email',`number`='$number',`dob`='$dob',`gender`='$gender',`religion`='$religion',`nationality`='$nationality',`status`='$status',`hobbies`='$hobbies',`languages`='$languages',`address`='$address',`school`='$school',`stream`='$stream',`12thdob`='$thdob',`skill`='$skill',`experience`='$experience' WHERE `id` = $id;";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("query faild".mysqli_error());
    }
    else{
        ?>
        <script>
            alert('Data Update Succecfully..!');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="icon" href="img/logo.png">
    <title>CV Maker | Resume</title>
</head>

<body>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font-family: 'Poppins', sans-serif;
            font-size: 12pt;

            background: rgb(249, 249, 249);
            background: radial-gradient(circle, rgba(249, 249, 249, 1) 0%, rgba(240, 232, 127, 1) 49%, rgba(246, 243, 132, 1) 100%);
            /* background-image: url(./tiles/tile23.jpg); */
            background-attachment: fixed;
        }

        * {
            margin: 0px;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {

            width: 21cm;
            min-height: 29.7cm;
            padding: 0.5cm;
            margin: 0.5cm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {


            /* height: 256mm; */


        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

        * {
            transition: all .2s;
        }

        table {
            border-collapse: collapse;
        }

        .pr {
            padding-right: 30px;
        }

        .pd-table td {
            padding-right: 10px;
            padding-bottom: 3px;
            padding-top: 3px;
        }
    </style>

</body>

<div class="page">
    <div class="subpage">
        <table class="w-100">
            <tbody>
                <tr>
                    <td colspan="2" class="text-center fw-bold fs-4">Resume</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="personal-info zsection">
                        <div class="fw-bold name"><?php echo $row['name'];?></div>
                        <div>Mobile : <span class="mobile">+91-<?php echo $row['number'];?></span></div>
                        <div>Email : <span class="email"><?php echo $row['email'];?></span></div>
                        <div>Address : <span class="address"><?php echo $row['address'];?></span></div>
                        <hr>
                    </td>
                </tr>

                <tr class="objective-section zsection">
                    <td class="fw-bold align-top text-nowrap pr title">Objective</td>
                    <td class="pb-3 objective">
                        To be a part of an organization where get a chance to use my knowledge
                        and skills to contribute in the progress of the organizations as well as myself.
                    </td>
                </tr>

                <tr class="experience-section zsection">
                    <td class="fw-bold align-top text-nowrap pr title">Experience</td>
                    <td class="pb-3 experiences">

                        <div class="experience mb-2">
                            <div class="fw-bold">- <span class="job-role">Guest Services Representative</span> <span
                                    class="duration"></span>
                            </div>
                            <div class="company"><?php echo $row['experience'];?></div>
                            <div class="work-description">Handling customers and fulfilling their needs</div>
                        </div>

                    </td>
                </tr>

                <tr class="education-section zsection">
                    <td class="fw-bold align-top text-nowrap pr title">Education</td>
                    <td class="pb-3 educations">

                        <div class="education mb-2">
                            <div class="fw-bold">- <span class="course">Completed 12th Class (<?php echo $row['stream'];?>
                                    Stream)</span></div>
                            <div class="institute"><?php echo $row['school'];?></div>
                            <div class="date">Passed in <?php echo $row['12thdob'];?></div>
                        </div>

                        <div class="education mb-2">
                            <div class="fw-bold">- <span class="course">Bachelor’s of <?php echo $row['stream'];?> (Programme)</span></div>
                            <div class="institute"><?php echo $row['school'];?></div>
                        </div>



                    </td>
                </tr>

                <tr class="skills-section zsection">
                    <td class="fw-bold align-top text-nowrap pr title">Skills</td>
                    <td class="pb-3 skills">

                        <div class="skill">- <?php echo $row['skill'];?></div>
                        <div class="skill">- <?php echo $row['skill'];?></div>

                    </td>
                </tr>

                <tr class="personal-details-section zsection">
                    <td class="fw-bold align-top text-nowrap pr title">Personal Details</td>
                    <td class="pb-3">
                        <table class="pd-table">
                            <tr>
                                <td>Date of Birth</td>
                                <td>: <span class="date-of-birth"><?php echo $row['dob'];?></span></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>: <span class="gender"><?php echo $row['gender'];?></span></td>
                            </tr>
                            <tr>
                                <td>Religion</td>
                                <td>: <span class="religion"><?php echo $row['religion'];?></span></td>
                            </tr>
                            <tr>
                                <td>Nationality</td>
                                <td>: <span class="nationality"><?php echo $row['nationality'];?></span></td>
                            </tr>
                            <tr>
                                <td>Marital Status</td>
                                <td>: <span class="marital-status"><?php echo $row['status'];?></span></td>
                            </tr>
                            <tr>
                                <td>Hobbies</td>
                                <td>: <span class="hobbies"><?php echo $row['hobbies'];?></span></td>
                            </tr>

                        </table>

                    </td>
                </tr>

                <tr class="languages-known-section zsection">
                    <td class="fw-bold align-top text-nowrap pr title">Languages Known</td>
                    <td class="pb-3 languages">

                    <?php echo $row['languages'];?>
                    </td>
                </tr>

                <tr class="declaration-section zsection">
                    <td class="fw-bold align-top text-nowrap pr title">Declaration</td>
                    <td class="pb-5 declaration">
                        I hereby declare that above information is correct to the best of my
                        knowledge and can be supported by relevant documents as and when
                        required.
                    </td>
                </tr>
                <tr>
                    <td class="px-3">Date : <?php echo date("Y-m-d");?></td>
                    <td class="px-3 name text-end"><?php echo $row['name'];?></td>

                </tr>
            </tbody>
        </table>
    </div>

</div>
</body>

</html>
