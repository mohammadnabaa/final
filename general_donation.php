<?php


include("dbconnect.php");



    if (isset($_POST['submit'])){
    $name =$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $donation_type=$_POST['donation_type'];
    $idea=$_POST['idea'];
  }
    



    $Sql="insert into   general_donation values (null ,'".$name."','".$phone."','".$email."','".$address."','".$donation_type."','".$idea."')";


   








    echo $Sql;

mysqli_query($conn, $Sql);

?>