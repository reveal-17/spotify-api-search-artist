<?php

require_once('vendor/autoload.php');
$CLIENT_ID = getenv('CLIENT_ID');
$session = new SpotifyWebAPI\Session(
    "{$CLIENT_ID}",
    '1e08120c75754a8f8de076cf79de318b'
);
$api = new SpotifyWebAPI\SpotifyWebAPI();
$session->requestCredentialsToken();
$accessToken = $session->getAccessToken();
$api->setAccessToken($accessToken);
