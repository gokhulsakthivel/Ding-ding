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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
		<link rel="icon" href="img/Ding-ding.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="css/choose1.css">
    <title></title>
  </head>
  <body>
    <div class="importants">
		<?php  if (isset($_SESSION['username'])) : ?>
			<p class="puser">Welcome <span class="pname"><?php echo $_SESSION['username']; ?></span></p>
			<p class="logout"> <a href="index.php?logout='1'">logout</a> </p>
		<?php endif ?>
	</div>
	<section class="heading" style="">
		<h1>Embrace Yourself</h1>
	</section>

	<section class="box-pos">
		<div class="box-wrap" style="
	padding: 150px 0px;
	font-size: -webkit-xxx-large;
	background-image:url(img/7.jpg);
	background-attachment: scroll;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	width: 100%;
	text-align: center;
	color: white;
	border-radius: 10px;

	letter-spacing: 0.5em;">
			<p>HOSPITAL</p>
		</div>
	</section>
	<section class="module-pos">
		<div class="module-wrap">
			<a href="navigate.html">navigate</a>
		</div>
		<div class="module-wrap">
			<a href="hospital.html">Feel by look</a>
		</div>
		<div class="module-wrap">
			<a href="image1.html">Twril it</a>
		</div>
		<div class="module-wrap">
			<a href="opinion.php">Opinion</a>
		</div>
	</section>
	<section class="box-pos">
		<div class="box-wrap" style="
	padding: 150px 0px;
	font-size: -webkit-xxx-large;
	background-image:url(img/8.jpg);
	background-size: cover;
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-position: center;
	width: 100%;
	text-align: center;
	color: white;
	border-radius: 10px;

	letter-spacing: 0.5em;
	">
			<p>RAILWAY</p>
		</div>
	</section>


	<section class="module-pos">
		<div class="module-wrap">
			<a href="#">navigate</a>
		</div>
		<div class="module-wrap">
			<a href="railway.html">Feel by look</a>
		</div>
		<div class="module-wrap">
			<a href="image2.html">Twril it</a>
		</div>
		<div class="module-wrap">
			<a href="opinion.php">Opinion</a>
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
