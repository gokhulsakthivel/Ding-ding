<?php include('server.php') ?>
<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();

	//Initialize User class
	$user = new User();

	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);

	//Storing user data into session
	$_SESSION['userData'] = $userData;

	//Render facebook profile data
    if(!empty($userData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" margin:"auto" width="" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>';
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
	$authUrl = $gClient->createAuthUrl();
	$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt=""/></a>';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration system PHP and MySQL</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" type="text/css" href="css/index1.css">
<link rel="icon" href="img/Ding-ding.png" sizes="16x16" type="image/png">
<title>Login</title>
<style type="text/css">
h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
img{
	width: 70%;
    padding: 0% 15%;
}
</style>
</head>
<body>

<div class="header">
	<h2>Login</h2>
</div>

<form method="post" action="login.php">

	<?php include('errors.php'); ?>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" >
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="login_user">Login</button>
	</div>
		<div><?php echo $output; ?></div>
	<p>
		Not yet a member? <a href="register.php">Sign up</a>
	</p>

</form>

</body>
</html>
