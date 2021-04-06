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
price VARCHAR(255) NOT NULL
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


$sql = "INSERT INTO Flower_table (flower_name, store, price)
VALUES ('$flower_name', '$store','$price')";

if ($conn->multi_query($sql) === TRUE) {


} else {

}





$sql = "CREATE TABLE Coffee_table (
coffee_id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE,
coffee_name VARCHAR(255) NOT NULL,
coffee_store VARCHAR(255) NOT NULL,
coffee_price VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) {

} else {

}

$coffee =  $_POST['coffee'] ?? "";
$coffee_store = $_POST['coffee_store'] ?? "";
$coffee_price = substr($coffee,17);
$coffee_name = substr($coffee,0,17);


$sql = "INSERT INTO Coffee_table (coffee_name, coffee_store, coffee_price)
VALUES ('$coffee_name', '$coffee_store','$coffee_price')";

if ($conn->multi_query($sql) === TRUE) {


} else {

}
mysqli_close($conn);

?>

<br>

<html>
<head>
	<title>Plan for Smart Service : Ride to Deliver</title>
   <link rel="stylesheet" type="text/css" href="main.css">
   <link rel="stylesheet" type="text/css" href="css/contact.css">
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

  <div id="navbar">
		<a href="main.html" style="width:7%; position: absolute; right: 22%; color: rgb(0,0,0) !important">Home</a>
		<a href="database.php" style="width:7%; position: absolute; right: 17% ;color: rgb(0,0,0) !important">Database</a>
		<a onclick="openForm()" style="width:7%; position: absolute; right: 11%; color: rgb(0,0,0) !important"> Contact Us</a>
		<a href="" style="width:7%; position: absolute; right: 5%; color: rgb(0,0,0) !important"> Reviews</a>
		<a href="services.html" style="width:7%;  position: absolute; right: 0%; color: rgb(0,0,0) !important"> Service</a>
    <a href="cart.php">
		<img alt="Facebook" src="https://www.charge.com/wp-content/uploads/2015/12/cart.png" class="thumbnail" width="50" height="50"></a>
	</div>

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

      <input type="submit" value="Submit">
	</form>

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



  <!--Contact Us Popup Code -->
  	<div class="form-popup" id="contactus">
  				<div class="wrap-contact2">
  					<form class="contact2-form">
  						<span class="contact2-form-title">
  							Contact Us
  						</span>

  						<div class="wrap-input2">
  							<input class="input2" type="text" name="name">
  							<span class="focus-input2" data-placeholder="NAME"></span>
  						</div>

  						<div class="wrap-input2">
  							<input class="input2" type="text" name="email">
  							<span class="focus-input2" data-placeholder="EMAIL"></span>
  						</div>

  						<div class="wrap-input2">
  							<textarea class="input2" name="message"></textarea>
  							<span class="focus-input2" data-placeholder="MESSAGE"></span>
  						</div>

  						<div class="container-contact2-form-btn">
  							<div class="wrap-contact2-form-btn">
  								<div class="contact2-form-bgbtn"></div>
  								<button class="contact2-form-btn">
  									Send Your Message
  								</button>
  							</div>
  							<div class="wrap-contact2-form-btn">
  								<div class="contact2-form-bgbtn"></div>
  								<button class="contact2-form-btn" onclick="closeForm()">
  									Close
  								</button>
  							</div>
  						</div>
  					</form>
  				</div>

  	</div>
  		<script>

  		function openForm() {
  		  document.getElementById("contactus").style.display = "block";
  		}

  		function closeForm() {
  		  document.getElementById("contactus").style.display = "none";
  		}
  		</script>
</body>
</html>
