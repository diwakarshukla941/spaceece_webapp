<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/login.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>

    <!-- Include Navbar -->
    <?php include('../src/partials/navbar.php'); ?>

    <!-- Main Content Section -->
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center"
        style="min-height: 100vh; position: relative; padding:50px;">
        <!-- Background Image -->
        <div class="bg-overlay"></div>

        <!-- Welcome Section -->
        <div class="container" style="margin-top:20px;">
        <div class="login-container">
            <!-- Heading -->
            <h1>Registration</h1>
            <!-- <h2>Home Learning Made Easy</h2> -->

            <!-- Step 1: Phone Number -->
            <div id="step-1">
                <form id="phone-form" action="../routes/signup.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="phone" name="name" placeholder="enter full name" required>
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="phone" name="email" placeholder="enter your email" required>
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="enter your number" required>
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="phone" name="password" placeholder="enter your password" required>
                        <label for="cpass">Confirm Password</label>
                        <input type="text" class="form-control" id="phone" name="cpassword" placeholder="confirm your password" required>
                    </div><br>
                    <button type="submit" class="btn btn-custom btn-block">Sign Up</button>

                    <!-- <button type="button" class="btn btn-custom btn-block" onclick="showOTPForm()">Sign Up</button> -->
                    <!-- <div class="bottom-image-container">
                        <img src="../src/images/icon.jpg" alt="Visual Icon" class="bottom-image">
                    </div> -->
                </form>
            </div>   
        </div>
    </div>
        
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min

