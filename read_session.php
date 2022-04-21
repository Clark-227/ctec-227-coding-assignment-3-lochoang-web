<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Title</title>
</head>

<body>

    <h1>This site reads the variables</h1>
    <?php

    echo '<p>Your views is: ' . $_SESSION['views'] . '</p>';


    echo '<p>The version of browser is: ' . $_SESSION['browser'] . '</p>';


    echo '<p>Your current role is: ' . $_SESSION['role'] . '</p>';
    ?>
    <br>
    <!-- Links to other pages -->
    <a href="create_session.php">Go to create_session.php page</a>
    <br>
    <a href="destroy_session.php">Go to destroy_session.php</a>
    <br>
    <a href="destroy_all_session.php">Go to destroy_all_session.php page</a>

</body>

</html>