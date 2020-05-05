<?php
include 'connection.php';

$sql="SELECT UserType FROM User WHERE UserID = '".$_POST["username"]."' and Password = '".$_POST["password"]."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        if($row["UserType"]=="admin"){
            header('location:admin.php');
        }
        else {
            header('location:customer.php');
        }
    }
}
else{
    echo "<h1>login Failed!</h1>";
}
?>