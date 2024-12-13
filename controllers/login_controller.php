<?php
session_start();
include('../db/db.php');

$email = $_POST['email'];
$password = $_POST['password'];



$check = mysqli_query($connect, "SELECT * FROM user WHERE email='$email' AND password='$password' ");

if(mysqli_num_rows($check)>0){

    $parentsdata = mysqli_fetch_array($check);
    $_SESSION['parentsdata'] = $parentsdata;

    if($check){
        echo '
            <script>
                window.location = "../views/main.php";
            </script>
        ';
    }
}else{
    echo '
        // <script>
        //     alert("Invalid credentials or user not found!");
        //     window.location = "../";
        // </script>
    ';
}

?>
