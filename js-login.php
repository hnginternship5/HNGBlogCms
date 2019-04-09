<?php
session_start();

require("vendor/autoload.php");

$fb = new Facebook\Facebook([
  'app_id' => '325441314824736',
  'app_secret' => 'dc99854d60314fe5dc1cf55b15ee4e3a',
  'default_graph_version' => 'v2.2',
]);

$helper = $fb->getJavaScriptHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (!isset($accessToken)) {
  echo 'No cookie set or no OAuth data could be obtained from cookie.';
  exit;
}

// Logged in
echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());

$_SESSION['access_token'] = (string)$accessToken;

// User is logged in!
// You can redirect them to a members-only page.
//header('Location: https://example.com/members.php');
