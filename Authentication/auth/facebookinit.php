<?php
require_once __DIR__ . './vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '325441314824736',
  'app_secret' => 'dc99854d60314fe5dc1cf55b15ee4e3a',
  'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();
// Check server protocol and load resources accordingly.
if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") {
  $location = "https://ziki.hng.tech";
}
 else {
  $location = "http://localhost:8000";
}
$permissions = ['email', 'name']; // Optional permissions
$fb_loginUrl = $helper->getLoginUrl("$location/authentication/auth/fb-callback.php", $permissions);
