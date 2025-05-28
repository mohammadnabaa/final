<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		table th{
			background-color:orange;
			
			
		}
		table td{
			background-color: lightgreen;

		}
		table{
		text-align: center;
		width: 80%;
		}
		table th{
			background-color:orange;
			
			
		}
		table td{
			background-color: lightgreen;

		}
		table{
		text-align: center;
		width: 80%;
		margin-top: 3.5%;
		border-style: color: gold;
		border: 3px solid color: gold;
		}
		body{
			background-color: lightskyblue;
		}
		h1{
			text-align: center;
			color: purple;
			
		}
		


	</style>
</head>
<body>

<?php

include("dbconnect.php");





 $getassociation="select *  from association_donation ";
$resultarray=mysqli_query($conn, $getassociation);






?>




	<table border="1" align="center">
		<tr><th>id</th><th>name</th><th>phone</th><th>email</th><th>license</th></tr>











	
	



<?php 
echo "<br><h1>Association information table</h1>";

while($row=mysqli_fetch_array($resultarray)){

echo "	<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['phone']."</td>
<td>".$row['email']."</td>
<td>".$row['license']."</td>



</tr>";

}



 ?>





	


	</table>

</body>
</html>