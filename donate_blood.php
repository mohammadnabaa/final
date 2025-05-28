<?php
include("dbconnect.php");


/*$servername = "localhost";
$username = "root";
$password = "";

/ Create connection
$conn = mysqli_connect($servername, $username, $password,'mydbproject');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!!<br>";
*/




    $name =$_POST['name'];
    $address =$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $bloodgroup =$_POST['bloodgroup'];
    
    
    
   
    



    $Sql="insert into   donate_blood values (null ,'".$name."','".$address."','".$phone."','".$email."','".$bloodgroup."')";

mysqli_query($conn, $Sql);

?>