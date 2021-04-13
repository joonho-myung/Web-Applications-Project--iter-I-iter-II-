<!DOCTYPE html>
<html>
<head>
	<title>Plan for Smart Service : Cart</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" type="text/css" href="css/contact.css">
   <link rel="stylesheet" type="text/css" href="service.css">
</head>
<div id="navbar">
	<a href="testing.php" style="width:7%; position: absolute; right: 22%; color: rgb(0,0,0) !important">Home</a>
	<a href="database.php" style="width:7%; position: absolute; right: 17% ;color: rgb(0,0,0) !important">Database</a>
	<a onclick="openForm()" style="width:7%; position: absolute; right: 11%; color: rgb(0,0,0) !important"> Contact Us</a>
	<a href="" style="width:7%; position: absolute; right: 5%; color: rgb(0,0,0) !important"> Reviews</a>
	<a href="testing.php#!/services" style="width:7%;  position: absolute; right: 0%; color: rgb(0,0,0) !important"> Service</a>
	<a href="cart.php">
	<img alt="Facebook" src="https://www.charge.com/wp-content/uploads/2015/12/cart.png" class="thumbnail" width="50" height="50"></a>
</div>

<form action="" method="post">
  <input type="radio" id="1" name="option" value="1">
  <label for="male">Option 1</label>
  <input type="radio" id="1" name="option" value="2">
  <label for="female">Option 2</label>
	<br>
	<label for="fname">Enter Email to confirm:</label>
	<input type="text" id="email" name="email"><br><br>
  <button id="submit"> Submit</button>
  </form>

<a href="cart.php" style="width:7%; position: absolute;bottom: 60% ; color: rgb(0,0,0) !important">Continue</a>
</body>
</html>

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
    $sql = "CREATE TABLE Flower_table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    car_name VARCHAR(10) NOT NULL,
    startloc VARCHAR(255) NOT NULL,
    endloc VARCHAR(255) NOT NULL,
    date_ VARCHAR(255),
    time_ VARCHAR(255),
    price VARCHAR(255),
		email VARCHAR(255),
    reg_date TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {

    } else {

    }
    $sql = "CREATE TABLE Coffee_table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    car_name VARCHAR(10) NOT NULL,
    startloc VARCHAR(255) NOT NULL,
    endloc VARCHAR(255) NOT NULL,
    date_ VARCHAR(255),
    time_ VARCHAR(255),
    price VARCHAR(255),
		email VARCHAR(255),
    reg_date TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {

    } else {

    }


    echo "<br>";
    echo "<br>";
    $sql = "SELECT * FROM compareFlower_table";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>Flower</th>";
                    echo "<th>Price</th>";
                    echo "<th>Store</th>";

                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['flower_name'] . "</td>"."</td>";
                    echo "<td>" . $row['price'] . "</td>"."</td>";
                    echo "<td>" . $row['store'] . "</td>"."</td>"."</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
          }
        }

        $sql = "SELECT * FROM compareCoffee_table";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                    echo "<tr>";
                        echo "<th>Coffee</th>";
                        echo "<th>Price</th>";
                        echo "<th>Store</th>";

                    echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['coffee_name'] . "</td>"."</td>";
                        echo "<td>" . $row['coffee_price'] . "</td>"."</td>";
                        echo "<td>" . $row['coffee_store'] . "</td>"."</td>"."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($result);
              }
            }

echo "<br>";
echo "<br>";

$save = $_POST['option'] ?? "";
$email = $_POST['email'] ?? "";

if ($save === "1"){
$sql = "INSERT INTO Flower_table(flower_name, store, price, startloc, endloc, date_, time_)
SELECT flower_name, store, price, startloc, endloc, date_, time_
FROM CompareFlower_table
WHERE flower_id = 3";
if ($conn->multi_query($sql) === TRUE) {}
	$sql = "UPDATE Ordertable SET email = ('$email')WHERE email IS NULL";
	if ($conn->multi_query($sql) === TRUE) {}

$sql = "INSERT INTO Coffee_table(coffee_name, coffee_store, coffee_price, startloc, endloc, date_, time_)
SELECT coffee_name, coffee_store, coffee_price, startloc, endloc, date_, time_
FROM CompareCoffee_table
WHERE coffee_id = 3";
if ($conn->multi_query($sql) === TRUE) {}
	$sql = "UPDATE Ordertable SET email = ('$email')WHERE email IS NULL";
	if ($conn->multi_query($sql) === TRUE) {}
}
elseif ($save ==="2"){
  $sql = "INSERT INTO Flower_table(flower_name, store, price, startloc, endloc, date_, time_)
  SELECT flower_name, store, price, startloc, endloc, date_, time_
  FROM CompareFlower_table
  WHERE flower_id =4";
  if ($conn->multi_query($sql) === TRUE) {}
		$sql = "UPDATE Ordertable SET email = ('$email')";
		if ($conn->multi_query($sql) === TRUE) {}

  $sql = "INSERT INTO Coffee_table(coffee_name, coffee_store, coffee_price, startloc, endloc, date_, time_)
  SELECT coffee_name, coffee_store, coffee_price, startloc, endloc, date_, time_
  FROM CompareCoffee_table
  WHERE coffee_id = 4";
  if ($conn->multi_query($sql) === TRUE) {}
		$sql = "UPDATE Ordertable SET email = ('$email')";
		if ($conn->multi_query($sql) === TRUE) {}

}



		mysqli_close($conn);
		?>
