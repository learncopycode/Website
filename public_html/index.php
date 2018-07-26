<!DOCTYPE html>
<html>
<title>Kraeasy Records Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="/w3.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('/w3images/onepage_restaurant.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container ">
  <div class="w3-display-middle w3-jumbo">
    <p>Kraeasy Records</p>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">menu</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black">contact</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container">
    <p class="w3-xlarge"><a href="url">Record Label <a>| <a href="http://bitcoin.kraeasy.com/blog/blog_view.php">Blog <a>| <a href="url">Free Promo <a>| <a href="url"> Artists<a> |</p>
    <p class="w3-large">42 village St, New York</p>
  </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Kraezy Volume-1</h1>
    </div>
    <div class="w3-container">
    <img src="smiley.gif" alt="Smiley face" height="42" width="42">
      <h5>Tomato Soup <b>$2.50</b></br> </br> <a href="url">BUY <a></h5>
   
    </div>
    <div class="w3-container w3-black">
      <h1>Main Courses</h1>
    </div>
    <div class="w3-container">
      <h5>Grilled Fish and Potatoes <b>$8.50</b></h5>
      <h5>Italian Pizza <b>$5.50</b></h5>
      <h5>Veggie Pasta <b>$4.00</b></h5>
      <h5>Chicken and Potatoes <b>$6.50</b></h5>
      <h5>Deluxe Burger <b>$5.00</b></h5>
    </div>
    <div class="w3-container w3-black">
      <h1>Desserts</h1>
    </div>
    <div class="w3-container">
      <h5>Fruit Salad <b>$2.50</b></h5>
      <h5>Ice cream <b>$2.00</b></h5>
      <h5>Chocolate Cake <b>$4.00</b></h5>
      <h5>Cheese <b>$5.50</b></h5>
    </div>
  </div>
</div>

<!-- Contact Modal -->
<div id="contact" class="w3-modal ">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Get free unique presets & samples</h1>
    </div>
    <div class="w3-container">
      <p>Enter your e-mail, and recieve your free sample pack and bonus unique sounds custom made for you and none none other else:</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
       <!-- <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>-->
      <!--  <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>-->
        <p><input class="w3-input w3-padding-16 w3-border" type="e-mail" placeholder="E-mail" required name="Message"></p>
        <p><button class="w3-button" type="submit">SUBMIT</button></p>
      </form>
    </div>
  </div>
</div>

<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>



</body>
</html>