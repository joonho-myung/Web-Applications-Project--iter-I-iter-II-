<!DOCTYPE html>
<html>
<head>
	<title>Plan for Smart Service : Cart</title>
	 <link rel="stylesheet" type="text/css" href="main.css">
	 <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<div id="navbar">
	<a href="main.html" style="width:7%; position: absolute; right: 22%; color: rgb(0,0,0) !important">Home</a>
	<a href="database.php" style="width:7%; position: absolute; right: 17% ;color: rgb(0,0,0) !important">Database</a>
	<a onclick="openForm()" style="width:7%; position: absolute; right: 11%; color: rgb(0,0,0) !important"> Contact Us</a>
	<a href="" style="width:7%; position: absolute; right: 5%; color: rgb(0,0,0) !important"> Reviews</a>
	<a href="services.html" style="width:7%;  position: absolute; right: 0%; color: rgb(0,0,0) !important"> Service</a>
	<a href="cart.php">
	<img alt="Facebook" src="https://www.charge.com/wp-content/uploads/2015/12/cart.png" class="thumbnail" width="50" height="50"></a>
</div>


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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    }
catch(PDOException $e)
    {

    }

    echo "<br>";
    echo "<br>";
		$sql = "SELECT * FROM ordertable";
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
						$sql = "SELECT * FROM Flower_table";
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

                $sql = "SELECT * FROM Coffee_table";
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


		mysqli_close($conn);
		?>
