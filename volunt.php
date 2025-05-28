<?php


include("dbconnect.php");




    if (isset($_POST['submit'])){
    $name =$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $previous=$_POST['previous'];
    $age=$_POST['age'];
    $nationality=$_POST['nationality'];
    $address=$_POST['address'];
  }



    $Sql="insert into   volunteer values (null ,'".$name."','".$phone."','".$email."','".$gender."','".$previous."','".$age."','".$nationality."','".$address."')";


   








    echo $Sql;

mysqli_query($conn, $Sql);

?>