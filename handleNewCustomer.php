<?php

include 'connection.php';
echo "You are now in the Handle new Customer Page for";
echo "<br>",$_POST["CustomerName"], $_POST["UserType"];

$sql="INSERT INTO User (UserID, Password, UserType) Values('".$_POST["CustomerName"]."', '".$_POST["cpassword"]."', '".$_POST["UserType"]."')";

$result = $conn->query($sql);
echo "<br>New Customer record created in Database";

?>