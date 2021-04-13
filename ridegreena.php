<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    }
catch(PDOException $e)
    {

    }

$sql = "CREATE TABLE Comparetablea (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
car_name VARCHAR(10) NOT NULL,
startloc VARCHAR(255) NOT NULL,
endloc VARCHAR(255) NOT NULL,
date_ VARCHAR(255),
time_ VARCHAR(255),
price VARCHAR(255),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {}


$car1 = $_POST['car1'] ?? "";
$price1 = substr($car1,7);
$car_name1 = substr($car1,0,7);
$start1 =  $_POST['startloc1'] ?? "";
$end1 = $_POST['endloc1'] ?? "";
$date1 = $_POST['date1'] ?? "";
$time1 = $_POST['time1'] ?? "";

$sql = "INSERT INTO Comparetablea (car_name,startloc, endloc, date_, time_,price)
VALUES ('$car_name1','$start1','$end1','$date1','$time1','$price1')";

if ($conn->multi_query($sql) === TRUE) {

} else {
   echo "<br>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$car2 = $_POST['car2'] ?? "";
$price2 = substr($car2,7);
$car_name2 = substr($car2,0,7);
$start2 =  $_POST['startloc2'] ?? "";
$end2 = $_POST['endloc2'] ?? "";
$date2 = $_POST['date2'] ?? "";
$time2 = $_POST['time2'] ?? "";

$sql = "INSERT INTO Comparetablea (car_name,startloc, endloc, date_, time_,price)
VALUES ('$car_name2','$start2','$end2','$date2','$time2','$price2')";

if ($conn->multi_query($sql) === TRUE) {

} else {
   echo "<br>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>


    <html>
    <head>
    	<title>Plan for Smart Service : Ride to Destination</title>
    	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    	<style type="text/css">
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
       <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css" href="contact.css">
    </head>
    <body>

      <div id="navbar">
    		<a href="testing.php" style="width:7%; position: absolute; right: 22%; color: rgb(0,0,0) !important">Home</a>
    		<a href="database.php" style="width:7%; position: absolute; right: 17% ;color: rgb(0,0,0) !important">Database</a>
    		<a onclick="openForm()" style="width:7%; position: absolute; right: 11%; color: rgb(0,0,0) !important"> Contact Us</a>
    		<a href="" style="width:7%; position: absolute; right: 5%; color: rgb(0,0,0) !important"> Reviews</a>
    		<a href="testing.php#!/services" style="width:7%;  position: absolute; right: 0%; color: rgb(0,0,0) !important"> Service</a>
        <a href="comparea.php">
    		<img alt="Facebook" src="https://www.charge.com/wp-content/uploads/2015/12/cart.png" class="thumbnail" width="50" height="50"></a>
    	</div>


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
    	<div>

    <br>
    <img src="https://smartcdn.prod.postmedia.digital/driving/wp-content/uploads/2020/03/chrome-image-410909.png" alt="2020 wrx" width="500">
    <img src="https://images.honda.ca/models/H/Models/2021/civic_sedan/touring_10666_241modern_steel_metallic_front.png?width=1000" alt="2019 civic" width="500">
    <img src="https://cars.usnews.com/static/images/Auto/izmo/i94428619/2019_toyota_camry_angularfront.jpg" alt="2019 camry" width="500">

    <br>
<form action="" method="post">
      <input type="radio" id="Wrx" name="car1" value="wrx      $30">
      <label for="male">2020 Subaru Wrx ($30)</label>
      <input type="radio" id="Civic" name="car1" value="civic   $10">
      <label for="female">2019 Honda Civic ($10)</label>
      <input type="radio" id="Camry" name="car1" value="camry   $20">
      <label for="other">2019 Toyota Camry ($20)</label><br><br>

    	<label for="fname">Starting location(City, Province(in Acronyms)):</label>
    	<input type="text" id="start" name="startloc1"><br><br>
    	<label for="fname">Destination(City, Province(in Acronyms)):</label>
    	<input type="text" id="end" name="endloc1"><br><br>

    	<label for="fname">Date:</label>
    	<input type="text" id="Date" name="date1"><br><br>
    	<label for="fname">Time:</label>
    	<input type="text" id="Time" name="time1"><br><br>

      <input type="radio" id="Wrx" name="car2" value="wrx      $30">
      <label for="male">2020 Subaru Wrx ($30)</label>
      <input type="radio" id="Civic" name="car2" value="civic   $10">
      <label for="female">2019 Honda Civic ($10)</label>
      <input type="radio" id="Camry" name="car2" value="camry   $20">
      <label for="other">2019 Toyota Camry ($20)</label><br><br>

      <label for="fname">Starting location(City, Province(in Acronyms)):</label>
      <input type="text" id="start" name="startloc2"><br><br>
      <label for="fname">Destination(City, Province(in Acronyms)):</label>
      <input type="text" id="end" name="endloc2"><br><br>

      <label for="fname">Date:</label>
      <input type="text" id="Date" name="date2"><br><br>
      <label for="fname">Time:</label>
      <input type="text" id="Time" name="time2"><br><br>
      <button id="submit"> Add to Cart</button>
      </form>
      <script>
      document.getElementById("submit").addEventListener("click",function(){
          alert("Order Added to Cart");
        });
      </script>

    </div>
    		<div id="map"></div>

    		<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    		<script
    			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGCD8Bk6r07WnOxrz5AYEbMPdOA1NOGPE&callback=initMap&libraries=&v=weekly"
    			async
    		></script>


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
      	<div>
    </body>
    </html>
