<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="loginpage.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <label id="logo">SupplyDM</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Donate.php">Donate</a></li>
            <li><a href="About_Us.html">About Us</a></li>
            <li><a class="activate" href="login.php">Login</a></li>
        </ul>
    </nav>

    <?php 
    include("dbconnect.php");

    if(isset($_POST['username'])){
        $theusername = $_POST['username'];
        $password = $_POST['password'];

        $checkusersql = "SELECT * FROM users WHERE username='".$theusername."' AND password='".$password."'";
        $resultarray = mysqli_query($conn, $checkusersql);
        $row = mysqli_fetch_array($resultarray);
        $name = $row["name"];
        $rowcount = mysqli_num_rows($resultarray);

        if ($rowcount > 0){
            session_start();
            $_SESSION["username"] = $theusername;
            $_SESSION["name"] = $name;
            header("Location: index.php");
            die();
        } else {
            echo "<script>alert('Your Username or Password is wrong!');</script>";
        }
    }
    ?>

    <!-- Login Form -->
    <div class="login-form">
        <form action="" method="POST">
            <h3>Login Here</h3>

            <label>Username:</label>
            <input type="text" placeholder="Username" name="username" required><br>

            <label>Password :</label>
            <input type="password" placeholder="Password" name="password" required><br>

            <button type="submit" class="btn" ><a href="index.php">Log In</a></button>
            <p><a href="create_account.php">*Create Account</a></p>
        </form>
    </div>

</body>
</html>
