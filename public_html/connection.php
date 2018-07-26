<?php


function Connect()
{
 $dbhost = "10.169.0.145";
 $dbuser = "kraeasyc_bit";
 $dbpass = "lovegaga95";
 $dbname = "kraeasyc_bit";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

?>