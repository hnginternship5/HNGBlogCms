<?php
session_start();
require_once __DIR__ . './vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '325441314824736',
  'app_secret' => 'ed3906d96895d0d31d0da6a4674174e5',
  'default_graph_version' => 'v3.2',
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

$_SESSION['access_token'] = (string)$accessToken;



if (isset($_SESSION['access_token'])) {
  try {
    $fb->setDefaultAccessToken($_SESSION['access_token']);
    $result = $fb->get('/me?local=en_US&fields=name,email');
    $user = $result->getGraphUser();
    $name =   $user->getField('name');
    $email =  $user->getField('email');
    $_id = $user->getField('id');

      //add details to settings.json

    //set the filename
    $filename = '../settings.json';

    $firstname = $user || "";
    $lastname = "";
    $email = $email || "";
    $id = $_id || "";
    $profile_photo = "";

    $user = [
      'user' => [
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email,
        "id" => $id,
        "profile_photo" => $profile_photo,
        "access_token" => $_SESSION['access_token']
      ]
    ];


    //format the data
    $formattedData = json_encode($user);


    //open or create the file
    $handle = fopen($filename, 'w+');

    //write the data into the file
    fwrite($handle, $formattedData);

    //close the file
    fclose($handle);

    //  redirect
      header('Location: https://ziki.hng.tech');

  } catch (Exception $e) {
    echo $e->getTraceAsString();
  }
}




// User is logged in with a long-lived access token.
