<?php
session_start();
$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$ID=$_POST["SafeID"];
$key=$_POST["Key"];
$DeviceID = $_POST["DeviceID"];
$sql = "SELECT * FROM `Safes` WHERE `SafeID` =".$ID." AND `Access_Key` = '".$key."'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $cookie_name = "ID";
$cookie_value = $_POST["SafeID"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


$cookie_name = "Key";
$cookie_value = $_POST["Key"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

   echo "Correct";
   echo '<form action="ViewSafe.php" method="Post" id="myForm">
   <input type="text" style="display:none" name="SafeID" value="'.$ID.'">
   </form>
   <script>
       document.getElementById("myForm").submit();
   </script>';
   $add = "INSERT INTO `Devices` (`SafeID`, `DeviceID`) VALUES ('".$ID."', '".$DeviceID."');";
   $find="SELECT * FROM Devices Where DeviceID = '".$DeviceID."'";
   echo $find;
   $x = $conn->query($find);
   if ($x->num_rows == 0)
   $conn->query($add);
   
   
} else {
    echo "Wrong Access Key";
}
$conn->close();
?>


