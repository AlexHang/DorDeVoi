<?php
$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";

$id=$_POST["DelID"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = 'UPDATE `Safes` SET `Owner_ID` = "Deleted" WHERE `Safes`.`SafeID` ="'.$id.'"';

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo "<script>
       window.location = 'https://dordevoi.ro/MyProfile/Profile.php';
    </script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>