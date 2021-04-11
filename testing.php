<!DOCTYPE html>
<html>
<head>
	<title>Plan for Smart Service</title>
	    <link rel="stylesheet" href="main.css">
			<link rel="stylesheet" href="css/contact.css">

</head>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<body ng-app="myApp">

	<div style="text-align:right;"> 
		<?php

		function brdetect( )
		{
			$res = $_SERVER['HTTP_USER_AGENT'];
			if ( strpos ($res, "Edg") == true)
				echo "Browser: Microsoft Edge";
			else if ( strpos ($res, "Firefox") == true)
						echo "Browser: Firefox";
					else if ( strpos ($res, "Chrome") == true)
					echo "Browser: Google Chrome";
						else  echo "Browser: unkown";
		}

		brdetect( );
		?>
	</div>

<div id="navbar">
		<a href="#/!">
		<img alt="Home" src="https://1.bp.blogspot.com/-LJJmwm602gY/YEU7eobTIoI/AAAAAAAAEhg/mfYMtSPDgngyCRcdZCVLUKH2EfYOertgQCLcBGAsYHQ/s200/21ea6db1-48d1-4ca9-850b-8e3ca24ee317_200x200.png" class="thumbnail" width="50" height="50"></a>
		<h1> Smart Service </h1>
		<a href="#/!" style="width:7%; position: absolute;top:4% ;right: 22%; color: rgb(0,0,0) !important">Home</a>
		<a href="#!database" style="width:7%; position: absolute;top:4% ; right: 17% ;color: rgb(0,0,0) !important">Database</a>
		<a onclick="openForm()" style="width:7%; position: absolute;top:4% ; right: 11%; color: rgb(0,0,0) !important"> Contact Us</a>
		<a href="" style="width:7%; position: absolute;top:4% ; right: 5%; color: rgb(0,0,0) !important"> Reviews</a>
		<a href="services.html" style="width:7%;  position: absolute;top:4% ; right: 0%; color: rgb(0,0,0) !important"> Service</a>
		<a href="#!signup" style="font-size: 15px;width:7%;  position: absolute;top:9% ;right: -2%; color: rgb(0,0,0) !important"> Signup</a>
	</div>


<div ng-view></div>
 
<script>
 var app = angular.module("myApp", ["ngRoute"]);
 app.config(function($routeProvider) {
     $routeProvider
     .when("/", {
         templateUrl : "main.php"
     })
     .when("/database", {
         templateUrl : "database.php"
     })
     .when("/signup", {
         templateUrl : "signup.html"
     })
 });
 </script>
 

</body>
</html>
 