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
		
		
			
			
		}
		table td{
			background-color: gold;

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
			color: green;
			
		}
		


	</style>
</head>
<body>

<?php

include("dbconnect.php");





 $getdonator="select *  from general_donation ";
$resultarray=mysqli_query($conn, $getdonator);






?>




	<table border="1" align="center">
		<tr><th>id</th><th>name</th><th>phone</th><th>email</th><th>address</th><th>donation_type</th><th>idea</th></tr>











	
	



<?php 
echo "<br><h1>Generals Donators Table</h1>";

while($row=mysqli_fetch_array($resultarray)){

echo "	<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['phone']."</td>
<td>".$row['email']."</td>
<td>".$row['address']."</td>
<td>".$row['donation_type']."</td>
<td>".$row['idea']."</td>


</tr>";

}



 ?>





	


	</table>

</body>
</html>