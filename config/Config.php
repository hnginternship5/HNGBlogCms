<?php

namespace Config;

class Config
{
    // This function is used the read the setting.json file and return a decoded json
    public static function getSetting() {
        $file = json_decode(file_get_contents('settings.json'));
        return $file;
    }
    
    // This checks for the Ouath and return the value of the token if found
    // And it returns an error if not found
    public static function getOauthToken($type){
        $settings = self::getSetting();
        $type = strtolower($type);

        if(array_key_exists($type, $settings)) {
            return $settings->$type->token;
        } else {
            return self::error();
        }
    }

    // Return a json encoded error message
    protected static function error() {
        $response = ['success' => false, 'message' => 'Something went wrong'];
        return json_encode($response);
    }
}
