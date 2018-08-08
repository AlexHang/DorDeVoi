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

$name="'".$_POST["username"]."'";

$pass="'".$_POST["password"]."'";

$sql = "SELECT * FROM `Users` WHERE UserName = ".$name." AND Password =".$pass." AND Validat = 1";



$result = $conn->query($sql);

if ($result->num_rows > 0) {

   

    while($row = $result->fetch_assoc()) {
            if ($row["Password"] == $_POST["password"])
            { echo "Password is ok";

    $_SESSION["connected"] = "yes";
        $_SESSION["ID"]=$row["User_ID"];
        echo "<script>window.top.location.href = 'https://dordevoi.ro/MyProfile/Profile.php';</script>"; 
        echo $_SESSION["connected"]. $_SESSION["ID"];

            }
            
            
    }

   

   //

} else {

    echo "userul sau parola sunt gresite";

}

$conn->close();

?>