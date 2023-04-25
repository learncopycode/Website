<?php 
require 'connection.php';

$conn    = Connect();
$name = $conn->real_escape_string($_POST['name']);
$email =  $conn->real_escape_string($_POST['email']);
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

$query   = "INSERT into EmailList(name,email) VALUES('" . $name . "','" . $email . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Thank You For Contacting Us <br>";

$conn->close();

?>