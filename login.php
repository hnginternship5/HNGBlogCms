<?php
require("vendor/autoload.php");
if (!session_id()) {
  session_start();
}

// require_once '/authentication/auth/googleinit.php';
// include '/includes/config.php';

$fb = new Facebook\Facebook([

  'app_id' => '325441314824736',
  'app_secret' => 'dc99854d60314fe5dc1cf55b15ee4e3a',
  'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost:8000/fb-callback.php', $permissions);

?>

<br>
<a href="<?php echo $glogin_url; ?>">Login with Google</a>

<a href="<?php echo $loginUrl ?>">Log in with Facebook!</a>;