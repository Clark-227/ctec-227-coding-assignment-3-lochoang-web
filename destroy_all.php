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
    <h1>This site destroys all variables</h1>

</body>
<?php
session_destroy()
?>
<br>
<!-- Links to other pages -->
<!-- <a href="read_session.php">Go to read_session.php page</a>
    <br> -->
<a href="create_session.php">Go to create_session.php</a>
<br>
<a href="destroy_session.php">Go to destroy_session.php</a>
<br>
<a href="read_session.php">Go to read_session.php</a>