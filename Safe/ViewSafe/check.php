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

//echo $ID." ".$key;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   $_SESSION["VisitSafeID"] = $_POST["SafeID"];
    echo "<script>window.top.location.href = 'https://dordevoi.ro/Safe/ViewSafe/ViewSafe.php';</script>"; 
        //echo $_SESSION["VisitSafeID"];
   
} else {
    echo "<h2 style='color:red;'>ID-ul mesajului sau cheia de acces sunt gresite</h2>";
}
$conn->close();
?>


