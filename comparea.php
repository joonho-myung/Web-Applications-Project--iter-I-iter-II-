<!DOCTYPE html>
<html>
<head>
	<title>Plan for Smart Service : Cart</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="service.css">
</head>

<div style="position:absolute; top:13.5%; right:97%">
<p>Option 1 <br> Option 2</p>
</div>

<div style="position:absolute; top:12%; right:74%">
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

		$sql = "CREATE TABLE Ordertable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    car_name VARCHAR(10) NOT NULL,
    startloc VARCHAR(255) NOT NULL,
    endloc VARCHAR(255) NOT NULL,
    date_ VARCHAR(255),
    time_ VARCHAR(255),
    price VARCHAR(255),
		email VARCHAR(255) IS NULL
    )";
    if (mysqli_query($conn, $sql)) {}

		$sql = "SELECT * FROM comparetablea";
		if($result = mysqli_query($conn, $sql)){
		    if(mysqli_num_rows($result) > 0){
		        echo "<table>";
		            echo "<tr>";
		                echo "<th>Car</th>";
		                echo "<th>Starting Location</th>";
		                echo "<th>Destinnation</th>";
		                echo "<th>Date</th>";
										echo "<th>Time</th>";
		            echo "</tr>";
		        while($row = mysqli_fetch_array($result)){
		            echo "<tr>";
		                echo "<td>" . $row['car_name'] . "</td>"."</td>";
		                echo "<td>" . $row['startloc'] . "</td>"."</td>"."</td>";
		                echo "<td>" . $row['endloc'] . "</td>"."</td>"."</td>";
		                echo "<td>" . $row['date_'] . "</td>"."</td>"."</td>";
										echo "<td>" . $row['time_'] . "</td>"."</td>"."</td>";
                    echo "<td>" . $row['price'] . "</td>"."</td>"."</td>";
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

$sql = "INSERT INTO Ordertable(car_name,startloc, endloc, date_, time_,price,email)
SELECT car_name,startloc, endloc, date_, time_,price,email
FROM Comparetablea
WHERE id = 1";
if ($conn->multi_query($sql) === TRUE) {}
}
elseif ($save ==="2"){
  $sql = "INSERT INTO Ordertable(car_name,startloc, endloc, date_, time_,price,email)
  SELECT car_name,startloc, endloc, date_, time_,price,email
  FROM Comparetablea
  WHERE id =2";
	if ($conn->multi_query($sql) === TRUE) {}
}

		mysqli_close($conn);
		header("Location: testing.php#!/database");
	}
 ?>
</div>
<div style="position:absolute; top:25%">
<form action="comparea.php" method="post">
  <input type="radio" id="1" name="option" value="1">
  <label for="male">Option 1</label>
  <input type="radio" id="1" name="option" value="2">
  <label for="female">Option 2</label>
	<br>
  <input type="submit" name="addtocart" value="Add To Cart">
  </form>
</div>



<!--<a href="#!database" style="width:7%; position: absolute;bottom: 57% ; color: rgb(0,0,0) !important">Continue</a>-->
</body>
</html>
