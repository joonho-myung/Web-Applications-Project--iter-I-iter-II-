<!DOCTYPE html>
<html>
<head>
	<title>Plan for Smart Service</title>
	    <link rel="stylesheet" href="main.css">
			<link rel="stylesheet" href="css/contact.css">

</head>
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
		<a href="main.php">
		<img alt="Home" src="https://1.bp.blogspot.com/-LJJmwm602gY/YEU7eobTIoI/AAAAAAAAEhg/mfYMtSPDgngyCRcdZCVLUKH2EfYOertgQCLcBGAsYHQ/s200/21ea6db1-48d1-4ca9-850b-8e3ca24ee317_200x200.png" class="thumbnail" width="50" height="50"></a>
		<h1> Smart Service </h1>
		<a href="main.php" style="width:7%; position: absolute;top:4% ;right: 22%; color: rgb(0,0,0) !important">Home</a>
		<a href="database.php" style="width:7%; position: absolute;top:4% ; right: 17% ;color: rgb(0,0,0) !important">Database</a>
		<a onclick="openForm()" style="width:7%; position: absolute;top:4% ; right: 11%; color: rgb(0,0,0) !important"> Contact Us</a>
		<a href="" style="width:7%; position: absolute;top:4% ; right: 5%; color: rgb(0,0,0) !important"> Reviews</a>
		<a href="services.html" style="width:7%;  position: absolute;top:4% ; right: 0%; color: rgb(0,0,0) !important"> Service</a>
		<a href="signup.php" style="font-size: 15px;width:7%;  position: absolute;top:9% ;right: -2%; color: rgb(0,0,0) !important"> Signup</a>
	</div>
<br><br>



<img src="https://floranext.com/wp-content/uploads/2014/06/flower-shop2.jpg" style="position: absolute;left:10% ;width:50%">
<dialog open style="text-align: middle;position:absolute;left:50% ;width: 25%; height: 85%">
<p style="font-family: 'Courier New', monospace">
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
	standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
	a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
	essentially unchanged. </p>

<p style="font-family: 'Courier New', monospace">
t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
 content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
 their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
 evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

<p style="font-family: 'Courier New', monospace">
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't any.</p>

<p style="font-family: 'Courier New', monospace">
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
 and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
  Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero.</p>

</dialog>
<!-- location Code -->
<h1 style="position:absolute; bottom:-10%; left:15%"> Where to find us </h1>
<style type="text/css">
      #map {
        height: 500px;
        width: 1000px;
      }
    </style>
    <script>
      function initMap() {
        const uluru = { lat: 43.658298, lng: -79.380783 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: uluru,
        });
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>
  </head>
  <body>
    <div id="map" style="position:absolute; bottom: -70%; left:25%"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGCD8Bk6r07WnOxrz5AYEbMPdOA1NOGPE&callback=initMap&libraries=&v=weekly"
      async
    ></script>





<!--About Us Code-->
<h1 style="position:absolute; bottom:-95%; left:15%"> About Us </h1>
	<dialog open style="text-align: middle; width: 300px; height: 100px; bottom:-110%; left:50%">
	<p > Austin Cheung </p>
	<p > I am a 4th Year Computer Science student. I live in Richmond Hill and I spent my pandemic playing video games.  </p>
	</dialog>


	<dialog open style="text-align: middle; width: 300px; height: 100px; bottom:-110%">
	<p> Allen You </p>
	<p> Hello! I am a 4th Year Computer Science student. Im stupid ... go easy on me :) </p>
	</dialog>

	<dialog open style="text-align: middle; width: 300px; height: 100px; bottom:-110%; right:50%">
	<p>  Joonho Myung </p>
	<p> I'm 4th Year Computer Science student. I live in Concord and I enjoy spending my time with watching sports games </p>
	</dialog>

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
 