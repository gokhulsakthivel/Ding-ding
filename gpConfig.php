<?php


//Include Google client library
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '677849196782-n680ll9s5hiik84gbq040jhmfskaq936.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'H3oBe0VtaAFMNDVuNhSeWa0Q'; //Google client secret
$redirectURL = 'http://localhost/log/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
