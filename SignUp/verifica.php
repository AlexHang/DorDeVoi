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

    echo "Not connected";

} 

else echo "ok";


$sql = "SELECT * FROM `Cheie` WHERE User_ID LIKE ".$_GET["id"]." AND Cheie Like '".$_GET["key"]."'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

    // output data of each row

  $sql="UPDATE `Users` SET Validat = 1 WHERE User_ID = ".$_GET["id"];
$result = $conn->query($sql);
        echo "valid";
        echo "<script>
        window.location.href='https://dordevoi.ro/LogInPage/LogIn.php';
        </script>";

} 

else {
    echo "cheie gresita";
}

?>