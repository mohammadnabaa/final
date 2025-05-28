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
			background-color: red;
		}
		h1{
			text-align: center;
			color: purple;
			
		}
		div{
			background-color: gold;
			color: gold;
			width: 400px;
			text-align: center;
			margin-left: 410px;

		}


	</style>
</head>
<body>

<?php



include("dbconnect.php");





 $getaskers="select *  from ask_for_blood ";
$resultarray=mysqli_query($conn, $getaskers);






?>




	<table border="1" align="center">
		<tr><th>id</th><th>name</th><th>address</th><th>phone</th><th>email</th><th>bloodgroup	</th><th>requiredquantity</th><th>blooddate</th><th>hospitalname</th><th>hospitaladress</th></tr>





	
	



<?php 
echo "<br><div><h1>Table show blood askers</h1></div> ";

while($row=mysqli_fetch_array($resultarray)){

echo "	<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['address']."</td>
<td>".$row['phone']."</td>
<td>".$row['email']."</td>
<td>".$row['bloodgroup']."</td>
<td>".$row['requiredquantity']."</td>
<td>".$row['blooddate']."</td>
<td>".$row['hospitalname']."</td>
<td>".$row['hospitaladress']."</td>

</tr>";

}



 ?>





	


	</table>

</body>
</html>