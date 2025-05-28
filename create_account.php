<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>creat account</title>
    <link rel="stylesheet" type="text/css" href="ceate_account.css">
</head>
<body>
	


	<div>
    <form  action="creat_acc.php"   method="POST">
        <h3>create account</h3>

        <label id="label">Name</label>
        <input type="text" placeholder="Name" name="name" id="name"><br>

        <label id="label">Username:</label>
        <input type="text" placeholder="UserName" name="username"><br>

        <label id="label">Password :</label>
        <input type="password" placeholder="Password" name="password"><br>

        <label id="label">Email:</label>
        <input type="email" placeholder="Email" name="email" id="neww"><br>

        <label id="label">  Phone :</label>
        <input type="text" placeholder="Phone" name="phone" id="new"><br>


        <button>Create</button><br><a href="login.php">*Login</a>

       
    </form>
</div>

</body>
</html>