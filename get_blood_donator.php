<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="get_blood_donator.css">
</head>
<body>

<?php

include("dbconnect.php");





 $get_blood_donator="select *  from donate_blood ";
$resultarray=mysqli_query($conn, $get_blood_donator);






?>




	<table border="1" align="center">
		<tr><th>id</th><th>name</th><th>address</th><th>phone</th><th>email</th><th>bloodgroup	</th></tr>




	
	



<?php 
echo "<br><div><h1>blood donators table</h1></div> ";

while($row=mysqli_fetch_array($resultarray)){

echo "	<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['address']."</td>
<td>".$row['phone']."</td>
<td>".$row['email']."</td>
<td>".$row['bloodgroup']."</td>

</tr>";

}



 ?>





	


	</table>
<a href="home.php"><img src="hm.png" align="right" height="50px" width="50px" id="hm"></a>
</body>
</html>