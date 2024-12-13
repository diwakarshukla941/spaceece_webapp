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
        style="min-height: 100vh; position: relative;">
        <!-- Background Image -->
        <div class="bg-overlay"></div>

        <!-- Welcome Section -->
        <div class="container">
        <div class="login-container">
            <!-- Heading -->
            <h1>Log In</h1>
            <!-- <h2>Home Learning Made Easy</h2> -->

            <!-- Step 1: Login  -->
            <div id="step-1">
                <form id="phone-form" action="../controllers/login_controller.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="phone" name="email" placeholder="enter your email" required><br>
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="phone" name="password" placeholder="enter your password" required>
                    </div><br>
                    <button type="submit" class="btn btn-custom btn-block">Log In</button>
                </form>
            </div>
        </div>
    </div>
        
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min

