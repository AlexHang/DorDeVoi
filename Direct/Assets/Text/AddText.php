<?php
session_start();
$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";
$id='"'.$_POST["ID"].'"';
$message='"'.$_POST["message"].'"';
$date='"'.$_POST["date"].'"';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'INSERT INTO `Direct_Assets`( `Type`, `Message`, `Date_Available`, `SafeID`) VALUES ("Text",'.$message.",".$date.",".$id.")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  echo '<script> 
window.close();
window.location = "https://dordevoi.ro/MyProfile/Profile.php";</script>'; 
?>
