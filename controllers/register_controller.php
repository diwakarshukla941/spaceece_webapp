<?php 

include('../db/db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
// $image = $_FILES['photo']['name'];
// $tmp_name = $_FILES['photo']['tmp_name'];
// $address = $_POST['address'];
// $role = $_POST['role'];


if($password==$cpassword){
    // move_uploaded_file($tmp_name, "./upload/$image");
    $insert = mysqli_query($connect, "INSERT INTO user(name,email,phone,password)
              VALUES('$name','$email','$phone','$password')");
    
    if($insert){
        echo '
            <script>
                alert("Registration Sucessfull");   
                window.location = "../views/login.php";
            </script>
        ';
        // if($role="User"){
        //     echo '
        //         <script>
        //             alert("Registration Sucessfull");   
        //             window.location = "../login.html";
        //         </script>
        //     ';
        // }elseif($role="Admin"){
        //     echo '
        //         <script>
        //             alert("Registration Sucessfull");   
        //             window.location = "./admin/adminlogin.html";
        //         </script>
        //     ';
        // }
    }
    // else{
    //     echo '
    //         <script>
    //             alert("some error occured !");
    //             window.location = "../";
    //         </script>
    //     ';
    // }

}else{
    echo '
        // $cpassword and $password
        <script>
            alert(" $password and confirm $cpassword does not match!");
            window.location = "../index.php";
        </script>
    ';
}

?>
