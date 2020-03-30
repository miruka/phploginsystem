<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar" href="#">
                <img src="img/logo.png" width="100" height="100" alt="logo">
            </a>
            <ul class="navbar ">
                <li class="navbar "> <a class="nav-link" href="index.php"> Home</a></li>
                <li class="navbar "> <a class="nav-link" href="#">Portfolio</a></li>
                <li class="navbar"> <a class="nav-link" href="#">About Me</a></li>
                <li class="navbar"> <a class="nav-link" href="#">Contacts</a></li>
            </ul>
            <div class="navbar">
                <?php
                if (isset($_SESSION['userId'])) {
                    echo    '<form class="navbar" action="includes/logout.inc.php" method="POST">
                            <button type="submit" name="logout-submit">Logout</button>
                            </form>';
                } else {
                    echo ' <form class="navbar" action="includes/login.inc.php" method="POST">
                                <input type="text" name="mailuid" placeholder="Username/Email...">
                                <input type="password" name="pwd" placeholder="Password...">
                                <button type="submit" name="login-submit">Login</button>
                            </form>';
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "wrongpwd") {
                            echo '<div><h6 class=" alert alert-warning">Enter Correct Password</h6></div>';
                        } else if ($_GET['error'] == "nouser") {
                            echo '<div><h6 class=" alert alert-warning">Enter Correct Username</h6></div>';
                        } else if ($_GET['error'] == "emptyfields") {
                            echo '<div><h6 class=" alert alert-warning">Enter All Fields</h6></div>';
                        }
                    }

                    echo ' <a class="navbar h5" href="signup.php">Signup</a>';
                }
                ?>




            </div>

        </nav>


    </header>