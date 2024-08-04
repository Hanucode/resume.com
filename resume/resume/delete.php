<?php 
include 'config.php';
session_start();

$user_id =  $_SESSION['user_id'];
if(!isset($user_id)){
    header('loacation:login.php');
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = "DELETE FROM `form` WHERE id = '$id'";

$result = mysqli_query($conn,$query);
if(!$result){
    die("Query faild".mysqli_error());
}
else{
    ?>
        <script>
            alert('Data Delete Succecfully..!');
            window.open('myresumes.php?sid=<?php echo $id;?>','_self');
        </script>
        <?php
}
}
?>