<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link Style.css -->
    <link rel="stylesheet" href="style.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Bundle JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>
</head>
<body class="body">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">MovieTickets.lk</a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="signIn.php">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="signUp.php">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
    session_start();
    if (isset($_SESSION["UserName"])) {
        // Modify the navigation bar to show user dp instead of Sign In and Sign Up links
    }
    ?>
</body>
</html>
