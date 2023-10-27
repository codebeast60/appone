<?php
session_start();
include "connect.php";
// echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App one</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!-- start navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="index.php">Appone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <?php if (!isset($_SESSION['user'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="signup.php">signup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="login.php">login</a>
                        </li>
                    <?php } else {  ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="edit.php">edit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="logout.php">logout</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar  -->