<?php

session_start();
$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";

$id=$_POST["msgname"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM `Direct_Assets` WHERE `Asset_ID`` = ".$id;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $url=$row["Media_URL"];
    
        echo $url;
    }
} else {
    echo "0 results";
}
str_replace("dordevoi.ro/Safe/","",$url);
if($url)
{
    if (!unlink($url))
  {
  echo ("Error deleting $url");
  }
else
  {
  echo ("Deleted $url");
  }
}




// sql to delete a record
$sql = "DELETE FROM `Direct_Assets` WHERE `Asset_ID` = ".$id;

if ($conn->query($sql) === TRUE) {
    echo "<h1>Record deleted successfully</h1>";
} else {
    echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>
