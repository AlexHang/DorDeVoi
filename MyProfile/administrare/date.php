
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

$sql = 'UPDATE `Users` SET `Email` =  "'.$_POST["Email"].'",`Phone` =  "'.$_POST["Phone"].'"  WHERE `Users`.`User_ID` ="'.$_SESSION["ID"].'"';

if ($conn->query($sql) === TRUE) {
   // echo $sql;
    echo "Record updated successfully 
    <script>window.location.href='https://dordevoi.ro/MyProfile/Profile.php#'</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>