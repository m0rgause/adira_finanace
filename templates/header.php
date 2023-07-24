<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= web_name ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-yellow">
        <div class="container-fluid mx-3">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="Bootstrap" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-5 me-5">
                        <a class="nav-link fs-6 fw-medium" href="#">HOME</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link fs-6 fw-medium" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium">PRODUCTS</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium" href="./login.php">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>