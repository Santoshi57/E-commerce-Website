<?php

$host = "localhost";
$user = "root";
$pass = "";

$db = "classic";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error)
{
	
	die("database not connected".$conn->connect_error);
}

?>

<?php


$n = $_POST['cname'];
$a = $_POST['address'];
$p = $_POST['pan'];
$c = $_POST['contact'];
$e = $_POST['email'];
$r = $_POST['product'];
$u = $_POST['number'];
$m = $_POST['message'];
$d = $_POST['date'];

$sql = "INSERT INTO classicshoe (name,address,pan_number,contact,email,products,quantity,message,date)
VALUES('$n','$a','$p','$c','$e','$r','$u','$m','$d')";

$res = $conn->query($sql);


if($res == TRUE)
{
	echo "Data has been stored successfully...";
}
else
{
	echo " Not stored";
}

?>

<html>
<body>
<a href="order.html">Continue...</a>
</body>
</html>