<!DOCTYPE html>
<html>
<head>
	<title>Plan for Smart Service : Cart</title>
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
