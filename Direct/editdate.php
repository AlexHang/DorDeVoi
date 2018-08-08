<?php
session_start();

$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";

$id=$_POST["SafeID"];
$nume=$_POST["Nume"];
$email=$_POST["Email"];
$telefon=$_POST["Tel"];




$sql="UPDATE `Safes` SET `Reciever` = '".$nume."', `ContactEmail` = '".$email."', `ContactPhone` = '".$telefon."' WHERE `Safes`.`SafeID` =".$id;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully
    <script>
        window.location.href='https://www.dordevoi.ro/MyProfile/Profile.php';
    </script>
    ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>