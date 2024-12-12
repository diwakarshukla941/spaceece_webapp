<!-- src/partials/navbar.php -->
<link rel="stylesheet" href="../css/navbar.css">

<nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fixed w-100">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="../images/logo.png" alt="Logo" width="120" height="40">
        </a>

        <!-- Navbar Toggler for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links (Right Side Icons) -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Use Font Awesome Icons -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-bell"></i> <!-- Bell Icon -->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-user"></i> <!-- User Icon -->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog"></i> <!-- Settings Icon -->
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
