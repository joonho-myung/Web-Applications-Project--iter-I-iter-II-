<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title>Plan for Smart Service</title>
	    <link rel="stylesheet" href="style.css">
			<link rel="stylesheet" href="contact.css">


</head>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<body>
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
		<a href="#!services" style="width:7%;  position: absolute;top:4% ; right: 0%; color: rgb(0,0,0) !important"> Service</a>
		<a href="#!signup" style="font-size: 15px;width:7%;  position: absolute;top:9% ;right: -2%; color: rgb(0,0,0) !important"> Signup</a>
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

		<div ng-view></div>
		<script src="app.js"></script>

</body>
</html>