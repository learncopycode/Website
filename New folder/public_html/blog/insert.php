<?php
$servername = "10.169.0.145";
$username = "kraeasyc_bit";
$password = "lovegaga95";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


//insert posts into database
$sql="INSERT into blog_posts (post_title,content,author_name,post_date) values('".$_POST['blogtitle']."','".$_POST['content']."','".$_POST['authorname']."',now())";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);
?>
&nbsp;&nbsp;<a href="blog_view.php"> view blog</a>