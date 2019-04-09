<?php
session_start();

require_once __DIR__ . './vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '325441314824736', // Replace {app-id} with your app id
  'app_secret' => 'ed3906d96895d0d31d0da6a4674174e5',
  'default_graph_version' => 'v3.2',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email', 'firstname', 'lastname']; // Optional permissions
$fb_loginUrl = $helper->getLoginUrl('http://localhost:8000/fb-callback.php', $permissions);
