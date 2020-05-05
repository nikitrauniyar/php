<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
<title>Login Page</title>
</head>

<body>
<?php
include 'connection.php';
?>

<h1>Welcome to login page</h1>
<form action="loginValidate.php" method= "post">
<label for="username">User name:</label><br>
<input type="text" id="username" name="username"><br>
<label for="password">password:</label><br>
<input type="password" id="password" name="password">
<input type="submit" value="Submit" >
</form>

</body>
</html>
