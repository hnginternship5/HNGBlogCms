<?php
session_start();
require_once __DIR__ . './vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '325441314824736',
  'app_secret' => 'dc99854d60314fe5dc1cf55b15ee4e3a',
  'default_graph_version' => 'v2.10',
]);

$helper = $fb->getRedirectLoginHelper();

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
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

// Logged in
echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());

$_SESSION['access_token'] =  $accessToken->getValue();


$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
echo '<h3>Metadata</h3>';
var_dump($tokenMetadata);

// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId('325441314824736');

// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();



if (!$accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
    exit;
  }

  echo '<h3>Long-lived Token</h3>';
  var_dump($accessToken->getValue());
}


try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name,email', $accessToken->getValue());
} catch (Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();
echo $user;

//       //add details to settings.json

//     //set the filename
//     $filename = '../settings.json';

//     $firstname = $user || "";
//     $lastname = "";
//     $email = $email || "";
//     $id = $_id || "";
//     $profile_photo = "";

//     $user = [
//       'user' => [
//         "firstname" => $firstname,
//         "lastname" => $lastname,
//         "email" => $email,
//         "id" => $id,
//         "profile_photo" => $profile_photo,
//         "access_token" => $_SESSION['access_token']
//       ]
//     ];


//     //format the data
//     $formattedData = json_encode($user);


//     //open or create the file
//     $handle = fopen($filename, 'w+');

//     //write the data into the file
//     fwrite($handle, $formattedData);

//     //close the file
//     fclose($handle);

//     // Check server protocol and load resources accordingly.
//     if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") {
//       $location = "https://ziki.hng.tech";
//     } else {
//       $location = "http://localhost:8000";
//     }

//     //  redirect
//       header("Location: $location");
