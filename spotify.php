<?php

require_once('vendor/autoload.php');
$CLIENT_ID = getenv('CLIENT_ID');
$CLIENT_SECRET = getenv('CLIENT_SECRET');
$session = new SpotifyWebAPI\Session(
    "{$CLIENT_ID}",
    "{$CLIENT_SECRET}"
);
$api = new SpotifyWebAPI\SpotifyWebAPI();
$session->requestCredentialsToken();
$accessToken = $session->getAccessToken();
$api->setAccessToken($accessToken);
