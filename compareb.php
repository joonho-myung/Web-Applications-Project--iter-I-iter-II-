<!DOCTYPE html>
<html>
<head>
	<title>Plan for Smart Service : Cart</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" type="text/css" href="css/contact.css">
   <link rel="stylesheet" type="text/css" href="service.css">
</head>

<div style="position:absolute; top:13%; right:97%">
<p>Option 1 <br> Option 2 </p>
</div>
<div style="position:absolute; top:22%; right:97%">
<p>Option 1 <br> Option 2 </p>
</div>

<div style="position:absolute; top:8%;left:5%">
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
		flower_id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE,
		flower_name VARCHAR(255) NOT NULL,
		store VARCHAR(255) NOT NULL,
		price VARCHAR(255) NOT NULL,
		startloc VARCHAR(255) NOT NULL,
		endloc VARCHAR(255) NOT NULL,
		date_ VARCHAR(255),
		time_ VARCHAR(255),
		email VARCHAR(255)
		)";
    if (mysqli_query($conn, $sql)) {}

			$sql = "CREATE TABLE Coffee_table (
			coffee_id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE,
			coffee_name VARCHAR(255) NOT NULL,
			coffee_store VARCHAR(255) NOT NULL,
			coffee_price VARCHAR(255) NOT NULL,
			startloc VARCHAR(255) NOT NULL,
			endloc VARCHAR(255) NOT NULL,
			date_ VARCHAR(255),
			time_ VARCHAR(255),
			email VARCHAR(255)
			)";
    if (mysqli_query($conn, $sql)) {}


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
echo "<br>";


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
mysqli_close($conn);


if(isset($_POST['addtocart'])){
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    }
catch(PDOException $e)
    {
		}


$save = $_POST['option'] ?? "";

if ($save === "1"){
$sql = "INSERT INTO Flower_table(flower_name, store, price, startloc, endloc, date_, time_,email)
SELECT flower_name, store, price, startloc, endloc, date_, time_,email
FROM CompareFlower_table
WHERE flower_id = 1";
if ($conn->multi_query($sql) === TRUE) {}

$sql = "INSERT INTO Coffee_table(coffee_name, coffee_store, coffee_price, startloc, endloc, date_, time_,email)
SELECT coffee_name, coffee_store, coffee_price, startloc, endloc, date_, time_,email
FROM compareCoffee_table
WHERE coffee_id = 1";
if ($conn->multi_query($sql) === TRUE) {}
}
elseif ($save ==="2"){
  $sql = "INSERT INTO Flower_table(flower_name, store, price, startloc, endloc, date_, time_,email)
  SELECT flower_name, store, price, startloc, endloc, date_, time_,email
  FROM compareFlower_table
  WHERE flower_id =2";
  if ($conn->multi_query($sql) === TRUE) {}

 $sql = "INSERT INTO Coffee_table(coffee_name, coffee_store, coffee_price, startloc, endloc, date_, time_,email)
 SELECT coffee_name, coffee_store, coffee_price, startloc, endloc, date_, time_,email
 FROM CompareCoffee_table
 WHERE coffee_id = 2";
 if ($conn->multi_query($sql) === TRUE) {}
}

		mysqli_close($conn);
		header("Location: testing.php#!/database");
}
		?>
</div>

<form action="compareb.php" method="post" style="position:absolute; top:31%">
  <input type="radio" id="1" name="option" value="1">
  <label for="male">Option 1</label>
  <input type="radio" id="1" name="option" value="2">
  <label for="female">Option 2</label>
	<br>
    <input type="submit" name="addtocart" value="Add To Cart">
  </form>

<!--<a href="#!database" style="width:7%; position: absolute;top: 35% ; color: rgb(0,0,0) !important">Continue</a>-->
</body>
</html>
