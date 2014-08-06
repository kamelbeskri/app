<?php

define('APPID','374612402685997');
define('APPSECRET','3fc6bb89148bee35f179091ac654e4da');
define('APPURL', 'https://apps.facebook.com/championslea'); //should be something like http://apps.facebook.com/my_app_name

$fb_sdk_path = __DIR__."/php-sdk/src";
set_include_path(get_include_path() . PATH_SEPARATOR . $fb_sdk_path);
require_once("facebook.php");



$facebook = new Facebook(array(
    'appId'  => APPID,
    'secret' => APPSECRET,
));

?>
