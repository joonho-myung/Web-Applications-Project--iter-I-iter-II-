<!--The Admin should be able to maintain the system for all major components including client,
server and databases. TheAdmin can maintain the database to add /delete/search/edit the data.
The Admin can maintain the database to cover alltypes of data: user accounts, login ids, passwords
, titles, images, addresses, descriptions, orders, prices, invoices, userreviews, user rankings,
 latitudes, longitudes, addresses, ...
-->

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Plan for Smart Service : Admin Page</title>
 </head>
 <body>
   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "userdb";
   $conn = new mysqli($servername, $username, $password,$database);
   if($conn->connect_error){
     die("Connection failed:". $conn->connect_error);
   }

    if(isset($_POST['select'])){
      $userid = $_POST['userid'];
      echo $userid;



      echo '<br><br>
      <form action=admin.php method="post">
      <input type="submit" name="back" value="Back">
      <input type="submit" name="edit" value="Edit">
      <input type="submit" name="add" value="Add">
      <input type="submit" name="delete" value="Delete">
      <br><br>
      <input type="submit" name="deleteuser" value="Delete User">
      </form>';

    }
    else{
     $sql = "SELECT userid, fname, lname FROM userdata";
     $result = $conn->query($sql);

     echo "<table><tr>
     <th>User ID</th>
     <th>First Name</th>
     <th>Last Name</th>
     </tr>
     ";

     if($result-> num_rows > 0){
       while($row = $result-> fetch_assoc()){
         echo "<tr><td>" . $row['userid']. "</td><td>".$row['fname']. "</td><td>" .$row['lname']. "</td></tr>" ;
       }
       echo "</table>";
     }else {
       echo "no users found";
     }
     // Select button
     echo '<br><br>
     <form action=admin.php method="post">
     <label for="userid">Enter UserID</label>
     <input type="text" name="userid">
     <input type="submit" name="select" value="Select User">
     </form>';
   }

   $conn-> close();
    ?>
<!--client shows users-->

 </body>
 </html>
<?php
function test(){

}

?>
