<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
<title>New Customer Page</title>
</head>
<body>
<h1>Welcome to new Customer page</h1>
<form action='handleNewCustomer.php' method= 'post'>
<label for='CustomerName'>Customer Name:</label><br>
<input type='text' id='CustomerName' name='CustomerName'><br>
<label for='cpassword'>password:</label><br>
<input type='password' id='cpassword' name='cpassword'>
<label for='UserType'>User Type:</label><br>
<input type='text' id='UserType' name='UserType'><br>
<input type='submit' value='Add'>
</form>

</body>
</html>