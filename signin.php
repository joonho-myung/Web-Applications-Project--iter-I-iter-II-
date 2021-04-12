<!DOCTYPE html>
<html>
  <head>
    <title>Plan for Smart Service : Sign In</title>
  </head>
  <body>
    <?php
      session_start();
      $servername = "localhost";
      $username = "root";
      $password = "";

        if(isset($_POST['signin'])){
          // Create connection
          $conn = mysqli_connect($servername, $username, $password);

          $sql ="USE userdb";
          mysqli_query($conn,$sql);

          $email = $_POST['email'] ??"";
          $passw = $_POST['pass'] ??"";

          $dsn = 'mysql:dbname=userdb;host=localhost';
          $user = 'root';
          $pass = '';

          $pdo = new PDO($dsn,$user,$pass);
          $sql = "SELECT  UserID FROM Userdata WHERE  email=? AND
                pass=?";
          $smt = $pdo->prepare($sql);
          $smt->execute(array($email,md5($passw))); //execute the query
          if($smt->rowCount()){
        	   echo " login successful ";
             $md5 = md5($passw);
             $sql = "SELECT userid FROM Userdata WHERE email='$email' and pass='$md5' ";

             $result = $conn->query($sql);
             $row = $result->fetch_assoc();

             $_SESSION["USERID"] = $row['userid'];
             header("Location: main.php");

          }
          echo " login unsuccessful ";

        }
        ?>
    <div>
      <form action=signin.php method="post">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email"><br><br>
      <label for="pass">Password:</label>
      <input type="text" id="pass" name="pass"><br><br>
      <input type="submit" name="signin" value="signin">
</form>
      </div>
  </body>
</html>
