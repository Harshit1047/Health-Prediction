<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('174493710639-k42kti8oi5j6idnjo89a2ohjabkkbkg8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('DmaOrh-968dXyPAXEKDJmfsQ');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Harshit_Health%20Prediction/google.php');

// to get the email and profile
$google_client->addScope('email');

$google_client->addScope('profile');

?>
