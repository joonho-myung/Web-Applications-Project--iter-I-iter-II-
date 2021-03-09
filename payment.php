<html>
<head>
	<title>Plan for Smart Service : Payment</title>
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
