<?php
# start sessions 
# very important for this to be placed before any HTML is emmited
session_start();
?>
<!doctype html>
<html>

<head>
    <title>Exploring PHP Sessions</title>
</head>

<body>
    <h1>Create Session Variables</h1>
    <?php
    # check to see if session variable already exists
    if (!isset($_SESSION['views'])) {
        $_SESSION['views'] = 0;
    } else {
        // # increment the session variable
        $_SESSION['views'] = $_SESSION['views'] + 1;
    }
    echo '<p>Your views is: ' . $_SESSION['views'] . '</p>';

    //Browser
    if (!isset($_SESSION['browser'])) {
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    }
    echo '<p>The version of browser is: ' . $_SESSION['browser'] . '</p>';

    if (!isset($_SESSION['role'])) {
        $_SESSION['role'] = 'admin';
    }
    echo '<p>Your current role is: ' . $_SESSION['role'] . '</p>';
    ?>
    <br>
    <!-- Links to other pages -->
    <a href="read_session.php">Go to read_session.php page</a>
    <br>
    <a href="destroy_session.php">Go to destroy_session.php</a>
    <br>
    <a href="destroy_all.php">Go to destroy_all_session.php page</a>

</body>

</html>