<?php
session_start();
include("dbconnect.php");

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['name'])) {
    header("Location: login.php"); // Change to your actual login page if different
    exit();
}

// Display welcome message
$name = htmlspecialchars($_SESSION['name']); // Escape output for safety
?>

<!DOCTYPE html>
<html>
<head>
    <title>Donation Page</title>
    <link rel="stylesheet" type="text/css" href="Donate.css">

</head>
<body>
    <h1>Welcome <span><?php echo $name; ?></span> to the Donation Field. You can choose how to help others.</h1>
    <h2>Please wait... you,ve been added to the queue</h2>
    <!-- You can add donation options or forms below -->
</body>
</html>
