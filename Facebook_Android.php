<?php

//initialize facebook sdk

require 'Facebook/autoload.php';

session_start();

$fb = new Facebook\Facebook([

'app_id' => '215838192312318',

'app_secret' => '4d8637cfd05ab499c99d67712a3b504c',

'default_graph_version' => 'v2.12',

]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // optional

try {

if (isset($_SESSION['facebook_access_token'])) {

$accessToken = $_SESSION['facebook_access_token'];

} else {

$accessToken = $helper->getAccessToken();

}

} catch(Facebook\Exceptions\facebookResponseException $e) {

// When Graph returns an error

echo 'Graph returned an error: ' . $e->getMessage();

 exit;

} catch(Facebook\Exceptions\FacebookSDKException $e) {

// When validation fails or other local issues

echo 'Facebook SDK returned an error: ' . $e->getMessage();

 exit;

}

if (isset($accessToken)) {

if (isset($_SESSION['facebook_access_token'])) {

$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

} else {

// getting short-lived access token

$_SESSION['facebook_access_token'] = (string) $accessToken;

// OAuth 2.0 client handler

$oAuth2Client = $fb->getOAuth2Client();

// Exchanges a short-lived access token for a long-lived one

$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);

$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;

// setting default access token to be used in script

$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

}

// redirect the user to the profile page if it has "code" GET variable

if (isset($_GET['code'])) {

header('Location: http://www.dordevoi.ro/Facebook_Android.php');

}

// getting basic info about user

try {

$profile_request = $fb->get('/me?fields=name,first_name,last_name,email');

$requestPicture = $fb->get('/me/picture?redirect=false&height=200'); //getting user picture

$picture = $requestPicture->getGraphUser();

$profile = $profile_request->getGraphUser();

$fbid = $profile->getProperty('id');// To Get Facebook ID

$fbfullname = $profile->getProperty('name');// To Get Facebook full name

$fbemail = $profile->getProperty('email');    //  To Get Facebook email

$fbpic = "<img src='".$picture['url']."' class='img-rounded'/>";

# save the user nformation in session variable

$_SESSION['fb_id'] = $fbid;

$_SESSION['fb_name'] = $fbfullname;

$_SESSION['fb_email'] = $fbemail;

$_SESSION['fb_pic'] = $fbpic;
echo $fbid.$fbemail;

} catch(Facebook\Exceptions\FacebookResponseException $e) {

// When Graph returns an error

echo 'Graph returned an error: ' . $e->getMessage();

session_destroy();

// redirecting user back to app login page

header("Location: ./");

exit;

} catch(Facebook\Exceptions\FacebookSDKException $e) {

// When validation fails or other local issues

echo 'Facebook SDK returned an error: ' . $e->getMessage();

exit;

}

} else {

// replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used

$loginUrl = $helper->getLoginUrl('http://www.dordevoi.ro/Facebook_Android.php', $permissions);
echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
echo '<script>
  window.location.href="'.$loginUrl.'";
</script>';

}

////









?>


<head>

<title>Login with Facebook</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link

href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"

rel = "stylesheet">

</head>

<body>

<?php if($_SESSION['fb_id']) {?>

<div class = "container">
<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 100%; width:100%; z-index: -999999; position: fixed;"><img src="field.png" style=" -webkit-filter: grayscale(30%); /* Safari 6.0 - 9.0 */
    filter: grayscale(30%); filter: brightness(100%); margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -999999; left: -110.222px; top: 0px;">
    
    <img src="https://dordevoi.ro/LogInPage/field.png" style=" -webkit-filter: grayscale(30%); /* Safari 6.0 - 9.0 */
    filter: grayscale(30%); filter: brightness(100%); margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -999999; left: -110.222px; top: 0px;">
    </div>
<div class = "jumbotron">

<h1>Hello <?php echo $_SESSION['fb_name']; ?></h1>

<p>Welcome to DorDeVoi</p>

</div>

<ul class = "nav nav-list">

<h4>Image</h4>

<li><?php echo $_SESSION['fb_pic']?></li>

<h4>Facebook ID</h4>

<li><?php echo $_SESSION['fb_id']; ?></li>

<h4>Facebook fullname</h4>

<li><?php echo $_SESSION['fb_name']; ?></li>

<h4>Facebook Email</h4>

<li><?php echo $_SESSION['fb_email']; ?></li>

</ul>

</div>

<?php } ?>

</body>

</html>

<?php


$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";

if(isset($fbid))
{echo '<a href="https://dordevoi.ro/Android/Profile.php">Continua</a>';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'SELECT * FROM `Users` WHERE `Email` = "'.$fbemail.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION["ID"] = $row["User_ID"];
        echo '
        <form id="f1" action="https://dordevoi.ro/Android/Profile.php" method="Post">
        <input type="text" value="'.$row["User_ID"].'" name="fb-log-id">
        <form>
        ';
      echo '<script>document.getElementById("f1").submit(); </script>';
             //  echo '<script>window.location = "https://dordevoi.ro/MyProfile/Profile.php" </script>';

        
    }
}  else  {

    echo "0 results";
    $img='http://graph.facebook.com/'.$fbid.'/picture?type=large';
    
    $sql='INSERT INTO `Users`( `UserName`,`Name`, `Email`, `ImageURL`, `Max_Size`) VALUES ("'.$fbid.'","'.$fbfullname.'","'. $fbemail.'","'.$img.'","3000")';
    echo $sql;
    if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
     $_SESSION["ID"] =  $last_id;
     echo $_SESSION["ID"];
      $_SESSION["connected"] = "yes";
       // echo '<script>window.location = "https://dordevoi.ro/MyProfile/Profile.php" </script>';
        echo '
        <form id="f1" action="https://dordevoi.ro/Android/Profile.php" method="Post">
        <input type="text" value="'.$fbid.'" name="fb-log-id">
        <form><script>document.getElementById("f1").submit(); </script>';
        
        
} 
}

}
?>

