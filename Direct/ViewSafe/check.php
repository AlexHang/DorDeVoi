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

$sql = "SELECT * FROM `Safes` WHERE `SafeID` =".$ID." AND `Access_Key` = '".$key."'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
   echo "Correct";
   echo '<form action="https://dordevoi.ro/Safe/ViewSafe/ViewSafe.php" method="Post" id="myForm">
   <input type="text" style="display:none" name="SafeID" value="'.$ID.'">
   </form>
   <script>
       document.getElementById("myForm").submit();
   </script>';
   
} else {
    echo "Wrong Access Key";
}
$conn->close();
?>


