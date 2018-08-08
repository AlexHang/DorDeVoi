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

$sql = "SELECT * FROM `Assets` INNER JOIN Safes ON Assets.SafeID = Safes.SafeID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["Date_Available"] == date("Y-m-d")) {
            echo "hello".$row["Asset_ID"];
            $to = $row["ContactEmail"];
            echo $to;
            $subject = "New Message Available in your safe";
            $txt = "Aveti un nou mesaj in platforma dordevoi.ro . Puteti accesa mesajul folosind lik-ul urmator :  https://dordevoi.ro/Safe/ViewSafe/AccessSafe.php  ,
            Cheia de acces si id-ul mesajului sunt :
            Cheie Acces:".$row["Access_Key"]."  
            ID ".$row["SafeID"];
            $headers = "From: admin@dordevoi.com\r\n";

mail($to,$subject,$txt,$headers,"-f admin@dordevoi.ro");
                    }
    }
} else {
    echo "0 results";
}
$conn->close();
?>