<?php
 // Check server protocol and load resources accordingly.
  if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") {
    $protocol = "https://";
  } else {
    $protocol = "http://";
  }



$fb = new Facebook\Facebook([
  'app_id' => '325441314824736',
  'app_secret' => 'dc99854d60314fe5dc1cf55b15ee4e3a',
  'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'name']; // Optional permissions
$fb_loginUrl = $helper->getLoginUrl("$location/Authentication/auth/fb-helper.php", $permissions);
