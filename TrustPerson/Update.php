<?php
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

$sql = 'UPDATE `Trusted` SET `Name`="'.$_POST["nume"].'",`Email`="'.$_POST["email"].'",`Phone`="'.$_POST["tel"].'",`Adress`="'.$_POST["adresa"].'" WHERE TrustPerson_ID = '.$_POST["ID"];

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo '<script>
      window.location.href="https://dordevoi.ro/MyProfile/Profile.php";
    </script>';
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>