<?php


include("dbconnect.php");





if (isset($_POST['submit'])){
   $name =$_POST['name'];
    $address =$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $bloodgroup =$_POST['bloodgroup'];
    $requiredquantity =$_POST['requiredquantity'];
    $blooddate =$_POST['blooddate'];
    $hospitalname =$_POST['hospitalname'];
    $hospitaladress =$_POST['hospitaladress'];
}

   
    
    
   
    



    $Sql="insert into   ask_for_blood values (null ,'".$name."','".$address."','".$phone."','".$email."','".$bloodgroup."','".$requiredquantity."','".$blooddate."','".$hospitalname."','".$hospitaladress."')";

    

mysqli_query($conn, $Sql);

?>