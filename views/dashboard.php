<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../src/css/dashboard.css">
    <link rel="stylesheet" href="../src/css/navbar.css">
</head>

<body>
    <!-- Include Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fixed w-100">
        <div class="container-fluid">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="#">
                <img src="../src/images/image.jpg" alt="Logo" class="navbar-logo">
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
    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card h-100 mb-3">
                    <div class="card-header text-center">Child's Profile</div>
                    <div class="card-body d-flex flex-column align-items-center">
                        <!-- Child Image -->
                        <img src="../src/images/icon.jpg" alt="Child's Photo" class="img-fluid rounded-circle mb-3"
                            style="width: 80px; height: 80px;">

                        <!-- Add Another Child Button -->
                        <button
                            class="btn btn-warning btn-sm w-100 mb-3 d-flex align-items-center justify-content-between"
                            style="border-radius: 20px;">
                            <span>Add another child</span>
                            <span class="badge bg-light text-dark rounded-circle">+</span>
                        </button>

                        <!-- Existing Children List -->
                        <div class="dropdown w-100">
                            <button
                                class="btn btn-outline-primary btn-sm w-100 d-flex justify-content-between align-items-center"
                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                                style="border-radius: 20px;">
                                <span>Samira</span>
                                <span>Age - 6 years</span>
                            </button>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="#">Remove Child</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <!-- Title and Perks Section -->
                <div class="info-section">
                    <h5 class="text-center">Pick a convenient locality to continue with our free plan</h5>
                    <div class="mt-3">
                        <h6>Free Plan</h6>
                        <ul class="list-unstyled">
                            <li>Guided sessions once a week.</li>
                            <li>Up to two children are covered.</li>
                            <li>Basic chat function to clear doubts.</li>
                            <li>Documentation on all activities.</li>
                            <li>Physical and digital calendar for marking children's activities.</li>
                        </ul>
                    </div>
                </div>

                <!-- Locality Selection Section -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="locality-card">
                            <label for="localityName1" class="form-label">Locality Name</label>
                            <input type="text" id="localityName1" class="form-control mb-3">

                            <label for="localityAddress1" class="form-label">Locality Address</label>
                            <input type="text" id="localityAddress1" class="form-control mb-2">
                            <input type="text" id="localityCity1" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="locality-card">
                            <label for="localityName2" class="form-label">Locality Name</label>
                            <input type="text" id="localityName2" class="form-control mb-3">

                            <label for="localityAddress2" class="form-label">Locality Address</label>
                            <input type="text" id="localityAddress2" class="form-control mb-2">
                            <input type="text" id="localityCity2" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- Continue Button Section -->
                <div class="text-center">
                    <button class="btn btn-warning">Continue</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>