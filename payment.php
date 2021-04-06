<html>
<head>
	<title>Plan for Smart Service : Payment</title>
	 <link rel="stylesheet" type="text/css" href="main.css">
	 <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
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
