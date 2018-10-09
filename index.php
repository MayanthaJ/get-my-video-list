<?php
//insert google libraries
require_once __DIR__ . '/vendor/autoload.php';
session_start();

//initialize your google app client key and secret
//Replace this with your own credentials
$OAUTH2_CLIENT_ID = '511825270036-krnflkbigifkr2ddhs05q9anrspirg5m.apps.googleusercontent.com';
$OAUTH2_CLIENT_SECRET = 'cOPtcCgfZKoWO7WhVb_z3h-5';

//Object creation using Google client library 
$client = new Google_Client();
$client->setClientId($OAUTH2_CLIENT_ID);
$client->setClientSecret($OAUTH2_CLIENT_SECRET);
$client->setScopes('https://www.googleapis.com/auth/youtube');
$redirect = filter_var('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'],
  FILTER_SANITIZE_URL);
$client->setRedirectUri($redirect);

// Define an object that will be used to make all API requests.
$youtube = new Google_Service_YouTube($client);


?>