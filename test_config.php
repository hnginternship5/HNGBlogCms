<?php
/*
How to use the config.php?
you import it where its needed
and call the variable you need.
*/
require 'config/Config.php';
use Config\Config;

// Store the value of the token if it is found in the settings.json 
// Otherwise it return an error
$token = Config::getOauthToken('google');
//run php test_config.php in your terminal
echo $token;
