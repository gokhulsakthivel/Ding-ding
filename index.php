<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="icon" href="img/Ding-ding.png" sizes="16x16" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:600|Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Varela+Round" rel="stylesheet">
</head>
<body>
	<!--
<section class="logo">
	<img src="img/logo.png" alt="logo">
</section>-
<header class="header-pos">
	<p class="headerlogo"><span class="headerspan1">Ding</span><span class="headerspan2">ding</p>
</header>
	<div class="importants">
		 logged in user information -->


	<div class="t-pos">
		<div class="t-wrap">
			<h1>Ding ding</h1><br><br><br><br>
			<p>A way beyond reality</p>
		</div>
	</div>
		<section class="v-wrap">
		<div class="v-pos">
			<img class="logo" src="img/logo.png" alt="">
		</div>
		</section>
		<div class="importants">
		<?php  if (isset($_SESSION['username'])) : ?>
			<p class="puser">Welcome <span class="pname"><?php echo $_SESSION['username']; ?></span></p>
			<p class="logout"> <a href="index.php?logout='1'">logout</a> </p>
		<?php endif ?>
	</div>

	<section class="s1-wrap">
		<div class="s1-pos">
			<h3>We are <span class="VR">VR</span></h3>
			<p></p>
		</div>
	</section>


	<section class="first-pos">
		<div class="first-wrap">
					<h1><a href="navigate.html">Navigate</a></h1>
					<p>Any one can move in our reality from any other reality</p>
		</div>
	</section>

	<section class="second-pos">
		<div class="second-wrap">
					<h1><a href="hospital.html">Feel by look</a></h1>
					<p>View our world same as real</p>
		</div>
	</section>

	<section class="third-pos">
		<div class="third-wrap">
					<h1><a href="image1.html">Twril it</a></h1>
					<p>a clean complete 360deg experience</p>
		</div>
	</section>

	<section class="final-pos">
		<div class="final-wrap">
					<h1><a href="choose.php"><span>Ping for a tour</span></a></h1>
		</div>
	</section>

	<footer class="footer-pos">
		<sectionc class="footer-wrap">
			<img src="img/logo.png" alt="">
			<h1>PRODUCT BY</h1>
			<section class="name-pos">
				<div class="name-wrap">
					<h1>AMARTHIYAN</h1>
					<p>BE CSE</p>
					<p>161CS110</p>
				</div>
			</section>
			<section class="name-pos">
				<div class="name-wrap">
					<h1>SAKTHIVEL</h1>
					<p>BE CSE</p>
					<p>161CS269</p>
				</div>
			</section>
			<section class="name-pos">
				<div class="name-wrap">
					<h1>GOKHUL</h1>
					<p>BE CSE</p>
					<p>161CS152</p>
				</div>

			</section>
			<hr>
			<p>Copyrights &copy 2018</p>
		</section>
	</footer>

</body>
</html>
