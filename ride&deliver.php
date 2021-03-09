<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$sql = "CREATE TABLE Flower_table (
flower_id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE,
flower_name VARCHAR(255) NOT NULL,
store VARCHAR(255) NOT NULL,
price VARCHAR(255) NOT NULL,
startloc VARCHAR(255) NOT NULL,
endloc VARCHAR(255) NOT NULL,
date_ VARCHAR(255),
time_ VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {

} else {

}

$flower = " ";
$store = " ";


$flower =  $_POST['flower'] ?? "";
$store = $_POST['store'] ?? "";
$price = substr($flower,8);
$flower_name = substr($flower,0,8);

$start =  $_POST['startloc'] ?? "";
$end = $_POST['endloc'] ?? "";
$date = $_POST['date'] ?? "";
$time = $_POST['time'] ?? "";

$sql = "INSERT INTO Flower_table (flower_name, store, price, startloc, endloc, date_, time_)
VALUES ('$flower_name', '$store','$price', '$start','$end','$date','$time')";

if ($conn->multi_query($sql) === TRUE) {


} else {

}





$sql = "CREATE TABLE Coffee_table (
coffee_id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE,
coffee_name VARCHAR(255) NOT NULL,
coffee_store VARCHAR(255) NOT NULL,
coffee_price VARCHAR(255) NOT NULL,
startloc VARCHAR(255) NOT NULL,
endloc VARCHAR(255) NOT NULL,
date_ VARCHAR(255),
time_ VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {

} else {

}

$coffee =  $_POST['coffee'] ?? "";
$coffee_store = $_POST['coffee_store'] ?? "";
$coffee_price = substr($coffee,17);
$coffee_name = substr($coffee,0,17);


$sql = "INSERT INTO Coffee_table (coffee_name, coffee_store, coffee_price, startloc, endloc, date_, time_)
VALUES ('$coffee_name', '$coffee_store','$coffee_price', '$start','$end','$date','$time')";

if ($conn->multi_query($sql) === TRUE) {


} else {

}
mysqli_close($conn);

?>

<br>

<html>
<head>
	<title>Plan for Smart Service : Ride to Deliver</title>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<style type="text/css">
		#div1 {
		  width: 50px;
		  height: 50px;
		  padding: 10px;
		  border: 1px solid #aaaaaa;
		}
		#map {
    	        height: 100%;
    	      }
    		html,
    		body {
    			height: 100%;
    			margin: 0;
    			padding: 0;
    		}

    		#map {
    			height: 100%;
    			float: left;
    			width: 70%;
    			height: 50%;
    		}

	</style>
</head>
<body>
	<button onclick="home()" class="float-left submit-button" >Home</button>
	<button onclick="logo()" class="float-left submit-button" >System logo</button>
	<button onclick="aboutUs()" class="float-left submit-button" >About us</button>
	<button	onclick="contactUs()" class="float-left submit-button" >Contact us</button>
	<button onclick="signup()" class="float-left submit-button" >Sign up</button>
	<button onclick="review()" class="float-left submit-button" >Reviews</button>
	<button onclick="cart()" class="float-left submit-button" >Shopping Cart</button>
	<button onclick="services()" class="float-left submit-button" >Types of Service</button>

	<script>
	function home(){
	  window.location='main.html';
	}
	function aboutUs(){
	  window.location='aboutUs.html';
	}
	function contactUs(){
	  window.location='contactUs.html';
	}
	function ride(){
	  window.location='rideToDestination.php';
	}
	function deliver(){
	  window.location='ride&deliver.php';
	}
	function services(){
	  window.location='services.html';
	}
	function cart(){
	  window.location='cart.php';
	}
	function signup(){
	  window.location='signup.php';
	}
	function logo(){
      window.location='logo.html';
    }
	function review(){
		window.location='review.html';
	}
</script>

	<form action="" method="post">
		<p> Which Flower do you want? </p>
	  <label for="flower">Choose your flowers</label>
	  <select name="flower" id="flower">
	    <option value="Roses    $3">Roses : $3.00 per flower</option>
	    <option value="Peony    $4">Peony : $4.00 per flower</option>
	    <option value="Anemone  $5">Anemone : $5.00 per flower</option>
	    <option value="Lilac    $3.50">Lilac : $3.50 per flower</option>
	  </select>


    <br><br>

	  <label for="store"> Choose your store </label>
        <select name="store" id="store">
            <option value="May Flowers"> May Flowers </option>
            <option value="Happy Petals"> Happy Petals </option>
            <option value="Toronto Flowers"> Toronto Flowers </option>
            <option value="All in Bloom"> All in Bloom </option>
	    </select>
	  <br><br>

	  <label for="fname">Starting location(City, Province(in Acronyms)):</label>
    	<input type="text" id="start" name="startloc"><br><br>
    	<label for="fname">Destination(City, Province(in Acronyms)):</label>
    	<input type="text" id="end" name="endloc"><br><br>

    	<label for="fname">Date:</label>
    	<input type="text" id="Date" name="date"><br><br>
    	<label for="fname">Time:</label>
    	<input type="text" id="Time" name="time"><br><br>


      <input type="submit" value="Submit">
	</form>

	<br><br><br>
	<form action="" method="post">
    <p> Which Coffee do you want? </p>
	  <label for="coffee">Choose your Coffee</label>
	  <select name="coffee" id="coffee">
	    <option value="Americano        $3"> Americano: $3 </option>
	    <option value="Caffe Latte      $4"> Caffe Latte: $4 </option>
	    <option value="Espresso         $2"> Espresso: $2 </option>
	    <option value="Ice Tea          $5"> Iced Tea: $5 </option>
	  </select>

    <br><br>

	  <label for="coffee_store"> Choose your store </label>
        <select name="coffee_store" id="store">
            <option value="The Grind"> The Grind </option>
            <option value="The Roasted Bean"> The Roasted Bean </option>
            <option value="Club Coffee"> Club Coffee </option>
            <option value="Coffee Time"> Coffee Time </option>
	    </select>
	  <br><br>

	  <label for="fname">Starting location(City, Province(in Acronyms)):</label>
    	<input type="text" id="start" name="startloc"><br><br>
    	<label for="fname">Destination(City, Province(in Acronyms)):</label>
    	<input type="text" id="end" name="endloc"><br><br>

    	<label for="fname">Date:</label>
    	<input type="text" id="Date" name="date"><br><br>
    	<label for="fname">Time:</label>
    	<input type="text" id="Time" name="time"><br><br>


      <input type="submit" value="Submit">
	</form>


	<script>
    	    function initMap() {
    	      const directionsService = new google.maps.DirectionsService();
    	      const directionsRenderer = new google.maps.DirectionsRenderer();
    	      const map = new google.maps.Map(document.getElementById("map"), {
    	        zoom: 7,
    	        center: { lat: 43.6532, lng: -79.3832 },
    	      });
    	      directionsRenderer.setMap(map);

    	      const onChangeHandler = function () {
    	        calculateAndDisplayRoute(directionsService, directionsRenderer);
    	      };
    				document
    	          .getElementById("start")
    	          .addEventListener("change", onChangeHandler);
    	        document
    	          .getElementById("end")
    	          .addEventListener("change", onChangeHandler);
    	    }

    	    function calculateAndDisplayRoute(directionsService, directionsRenderer) {
    	      directionsService.route(
    	        {
    	          origin: {
    	            query: document.getElementById("start").value,
    	          },
    	          destination: {
    	            query: document.getElementById("end").value,
    	          },
    	          travelMode: google.maps.TravelMode.DRIVING,
    	        },
    	        (response, status) => {
    	          if (status === "OK") {
    	            directionsRenderer.setDirections(response);
    	          }
    	        }
    	      );
    	    }
    	  </script>

    <p>Drag and drop the Cart icon to Square to save order </p>
    <script>
		function allowDrop(ev) {
		  ev.preventDefault();
		}

		function drag(ev) {
		  ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev) {
		  ev.preventDefault();
		  var data = ev.dataTransfer.getData("text");
		  ev.target.appendChild(document.getElementById(data));
		}
	</script>
	<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
	<br>
	<img id="drag1" src="https://1.bp.blogspot.com/-vdI00FJMQIs/YEW8-dxFzUI/AAAAAAAAEh8/fYNf-ncS9dMB5YIaZTJ3oKXpXV1qdqBywCLcBGAsYHQ/s320/basket-cart-icon-27.png" draggable="true" ondragstart="drag(event)" width="50" height="50">

	<br><br><br><br>

	<div id="map"></div>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGCD8Bk6r07WnOxrz5AYEbMPdOA1NOGPE&callback=initMap&libraries=&v=weekly"
	async
></script>


</body>
</html>
