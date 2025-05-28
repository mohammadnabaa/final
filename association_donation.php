<?php


include("dbconnect.php");




    $name =$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $license=$_POST['license'];
    
    



    $Sql="insert into association_donation values (null ,'".$name."','".$phone."','".$email."','".$license."')";


   








    echo $Sql;

mysqli_query($conn, $Sql);

?>