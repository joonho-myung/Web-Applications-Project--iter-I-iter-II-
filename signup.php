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

$sql = "CREATE TABLE Userdata (
userid INT(6) UNSIGNED AUTO_INCREMENT UNIQUE,
fname VARCHAR(255) NOT NULL,
lname VARCHAR(10) NOT NULL,
email VARCHAR(255) NOT NULL,
pass VARCHAR(255) NOT NULL,
pnum VARCHAR(255) NOT NULL,
addy VARCHAR(255) NOT NULL,
)";

if (mysqli_query($conn, $sql)) {

} else {

}


$fname = $_POST['fname'];
$lname =  $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['pass'];
$phone = $_POST['pnum'];
$address = $_POST['addy'];

$sql = "INSERT INTO Userdata (fname, lname, email, pass, pnum, addy)
VALUES ('$fname','$lname','$email','$password','$phone','$address')";


if ($conn->multi_query($sql) === TRUE) {
    echo "<br>";
    echo "New records created successfully";

} else {
   echo "<br>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

?>

<html>
  <head>
    <title>Plan for Smart Service : Sign Up</title>
  </head>
  <body>
    <div>
      <!--<form action=main.html>-->
      <form method="post">
      <label for="fname">First Name:</label>
      <input type="text" id="fname" name="fname"><br><br>
      <label for="lname">Last Name:</label>
      <input type="text" id="lname" name="lname"><br><br>
      <label for="email">Email:</label>
      <input type="text" id="email" name="email"><br><br>
      <label for="pass">Password:</label>
      <input type="text" id="pass" name="pass"><br><br>
      <label for="pnum">Phone Number:</label>
      <input type="text" id="pnum" name="pnum"><br><br>
      <label for="addy">Address:</label>
      <input type="text" id="addy" name="addy"><br><br>
      <input type="submit" id="submit">
</form>
      </div>
  </body>
</html>
