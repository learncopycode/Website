<!DOCTYPE html>
<html>
<head>
<title> Simple PHP contact form with MySQL and Form Validation <?=$_SERVER['HTTP_HOST']?> 
is currently under construction</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>



<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=kraeasyrecords@gmail.com&body=my-text">Click here to email</a>
  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
<form action="thankyou.php" method="POST">
<div class="w3-row-padding" style="margin:0 -16px 8px -16px">
<div class="w3-half">
<p>Name</p> <input type="text" name="name"></div>
 <div class="w3-half">
<p>Email</p> <input type="text" name="email"></div>

<button class="w3-button w3-black w3-section w3-justify" type="submit" value="Send">SEND</button>
<input class="w3-button w3-black w3-section w3-right" type="reset" value="Clear">
</div>
</form>
</div>
      </div>
    </div>
  </div>
  
</body>
</html>