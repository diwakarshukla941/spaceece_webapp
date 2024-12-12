<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>

    <!-- src/partials/navbar.php -->
    <link rel="stylesheet" href="./src/css/navbar.css">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fixed w-100">
        <div class="container-fluid">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="#">
                <img src="./src/images/image.jpg" alt="Logo" class="navbar-logo">
            </a>

            <!-- Navbar Toggler for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-bell"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Main Content Section -->
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center"
        style="min-height: 100vh; position: relative;">
        <!-- Background Image -->
        <div class="bg-overlay"></div>

        <!-- Welcome Section -->
        <div class="content text-center">
            <h1 class="mb-4">Welcome!</h1>
            <div class="buttons d-flex flex-column flex-md-row justify-content-center align-items-center">
                <a href="./views/register.php" class="mb-3 mb-md-0 me-md-3">
                    <button type="button" class="btn btn-info">Register</button>
                </a>
                <a href="./views/login.php">
                    <button type="button" class="btn btn-warning">Login</button>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min