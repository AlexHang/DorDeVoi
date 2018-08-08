<?php
// require Facebook PHP SDK
// see: https://developers.facebook.com/docs/php/gettingstarted/
require_once("Facebook/autoload.php");

// initialize Facebook class using your own Facebook App credentials
// see: https://developers.facebook.com/docs/php/gettingstarted/#install
$config = array();
$config['app_id'] = '215838192312318 ';
$config['app_secret'] = '4d8637cfd05ab499c99d67712a3b504c';
$config['fileUpload'] = false; // optional
$config['appsecret_proof'] = hash_hmac('sha256', 'EAADETb7IHZC4BAGaDjUZAiibeadWO7iwCzcHXkcYWYQJgoJJEEkZAPZATu8YrC7Te60OdcM7giyzomdTHPeDpuSAuQHgj0G4pka8nWZBRwEKYg6jBBxAoPDVzNOtRnkPBfhqfHAyyKZCZBxjh0jxybFaSLy2ep6TkmytUcvn4D7ZC2wK4bnmpCGo' , '84360377ae61a0d746806d45f19e53c6');
 
$fb = new Facebook\Facebook($config);



// define your POST parameters (replace with your own values)
$params = array(
  "access_token" => 'EAADETb7IHZC4BAGaDjUZAiibeadWO7iwCzcHXkcYWYQJgoJJEEkZAPZATu8YrC7Te60OdcM7giyzomdTHPeDpuSAuQHgj0G4pka8nWZBRwEKYg6jBBxAoPDVzNOtRnkPBfhqfHAyyKZCZBxjh0jxybFaSLy2ep6TkmytUcvn4D7ZC2wK4bnmpCGo', // see: https://developers.facebook.com/docs/facebook-login/access-tokens/
  "message" => "Utilizatorul ".$_POST["nume"]." a scris: ".$_POST["mesaj"],

);
 
// post to Facebook
// see: https://developers.facebook.com/docs/reference/php/facebook-api/
try {
      //$response = $fb->get('/me?fields=215838192312318,name', $config['app_secret']);

  $ret = $fb->post('/335492530303324/feed', $params,'EAADETb7IHZC4BAGaDjUZAiibeadWO7iwCzcHXkcYWYQJgoJJEEkZAPZATu8YrC7Te60OdcM7giyzomdTHPeDpuSAuQHgj0G4pka8nWZBRwEKYg6jBBxAoPDVzNOtRnkPBfhqfHAyyKZCZBxjh0jxybFaSLy2ep6TkmytUcvn4D7ZC2wK4bnmpCGo' );
  echo 'Successfully posted to Facebook
 <script>
     window.location = "https://dordevoi.ro/MyProfile/Profile.php";
 </script>
  ';
} catch(Exception $e) {
  echo $e->getMessage();
}
//215838192312318|
?>