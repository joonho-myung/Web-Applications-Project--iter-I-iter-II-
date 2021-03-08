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
price VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "<br>";
    echo "Table Records created successfully";
} else {
    echo "<br>";
    //echo "Error creating table: ";
}


$flower_name =  $_POST['flower'];
$price = $_POST['store'];


$sql = "INSERT INTO Flower_table (flower_name, price)
VALUES ('$flower_name', '$price')";

if ($conn->multi_query($sql) === TRUE) {
    echo "<br>";
    echo "New records created successfully";

} else {
   echo "<br>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

?>

<br>

<html>
<head>
	<title>Plan for Smart Service : Ride to Deliver</title>
	<style>
		#div1 {
		  width: 50px;
		  height: 50px;
		  padding: 10px;
		  border: 1px solid #aaaaaa;
		}
	</style>
</head>
<body>
	<button onclick="home()" class="float-left submit-button" >Home</button>
	<button onclick="logo()" class="float-left submit-button" >System logo</button>
	<button onclick="aboutUs()" class="float-left submit-button" >About us</button>
	<button	onclick="contactUs()" class="float-left submit-button" >Contact us</button>
	<button onclick="signup()" class="float-left submit-button" >Sign up</button>
	<button id="Reviews" class="float-left submit-button" >Reviews</button>
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
	  window.location='rideToDestination.html';
	}
	function deliver(){
	  window.location='ride&deliver.php';
	}
	function services(){
	  window.location='services.html';
	}
	function cart(){
	  window.location='cart.html';
	}
	function signup(){
	  window.location='signup.html';
	}
	function logo(){
      window.location='logo.html';
    }
</script>

	<form action="" method="post">
		<p> Which Flower do you want? </p>
	  <label for="flower">Choose your flowers</label>
	  <select name="flower" id="flower">
	    <option value="Roses">Roses : $3.00 per flower</option>
	    <option value="Peony">Peony : $4.00 per flower</option>
	    <option value="Anemone">Anemone : $5.00 per flower</option>
	    <option value="Lilac">Lilac : $3.50 per flower</option>
	  </select>


    <br><br>

	  <label for="store"> Choose your store </label>
        <select name="store" id="store">
            <option value="F1"> May Flowers </option>
            <option value="F2"> Happy Petals </option>
            <option value="F3"> Toronto Flowers </option>
            <option value="F4"> All in Bloom </option>
	    </select>
	  <br><br>

      <input type="submit" value="Submit">
	</form>
	
	<form action="" method="post">
    <p> Which Coffee do you want? </p>
	  <label for="coffee">Choose your Coffee</label>
	  <select name="coffee" id="coffee">
	    <option value="21"> Americano </option>
	    <option value="22"> Caffe Latte </option>
	    <option value="23"> Espresso </option>
	    <option value="24"> Iced Tea </option>
	  </select>

    <br><br>

	  <label for="store"> Choose your store </label>
        <select name="store" id="store">
            <option value="C1"> The Grind </option>
            <option value="C2"> The Roasted Bean </option>
            <option value="C3"> Club Coffee </option>
            <option value="C4"> Coffee Time </option>
	    </select>
	  <br><br>

      <input type="submit" value="Submit">
	</form>


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


</body>
</html>


