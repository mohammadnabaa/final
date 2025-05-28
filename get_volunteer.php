<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="get_volunteer.css">
</head>
<body>

<?php

include("dbconnect.php");



 $getvolnteer="select *  from volunteer ";
$resultarray=mysqli_query($conn, $getvolnteer);






?>




	<table border="1" align="center">
		<tr><th>id</th><th>name</th><th>phone</th><th>email</th><th>gender</th><th>previous</th><th>age</th><th>nationality</th><th>adress</th></tr>





<?php 
echo "<br><h1>volunteers table</h1?";

while($row=mysqli_fetch_array($resultarray)){

echo "	<tr>
<td>".$row[0]."</td>
<td>".$row[1]."</td>
<td>".$row['phone']."</td>
<td>".$row['email']."</td>
<td>".$row['gender']."</td>
<td>".$row['previous']."</td>
<td>".$row['age']."</td>
<td>".$row['nationality']."</td>
<td>".$row['address']."</td>
</tr>";

}



 ?>





	


	</table>
<a href="home.php"><img src="hm.png" align="right" height="50px" width="50px" id="hm"></a>
</body>
</html>