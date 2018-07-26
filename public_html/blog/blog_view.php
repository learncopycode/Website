<html
<body>
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


$sql="SELECT * FROM blog_posts";

$result = conn-> query($sql);



while($row = mysqli_fetch_array($result)){

?>
<p><?php echo $row['post_title'];?></p>
<p> by <?php echo $row['author_name'];?> on <?php echo $row['post_date'];?></p>
<p><?php echo $row['content']; ?></p>
<?php } ?>

</body>
</html>