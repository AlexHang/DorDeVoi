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

    echo "Not connected";

} 

else echo "ok";



$usrname ="'". $_POST["username"]."' ";

$pass = "'".$_POST["password"]."' ";

$phone="'".$_POST["phone"]."' ";

$mail="'".$_POST["email"]."' ";

$name="'".$_POST["name"]."' ";

$url="'".$_POST["URL"]."' ";





$sql = "SELECT * FROM `Users` WHERE UserName LIKE ".$usrname;

$result = $conn->query($sql);





if ($result->num_rows > 0) {

    // output data of each row

  

        echo "This username is taken, please try again with another username";

    

} 

else {

    echo "0 results";

$values = $usrname.",".$name.",".$pass.",".$mail.",".$phone.",".$url.",";

$sql = "INSERT INTO `Users`(`UserName`, `Name`, `Password`, `Email`, `Phone`,`ImageURL`,`Max_Size`) VALUES (" .$values.'3000'.")";

if ($conn->query($sql) === TRUE) {

    $last_id = $conn->insert_id;

    $_SESSION["SignUpID"] = $last_id;

    echo "New record created successfully";

    echo '<script>window.location = "https://dordevoi.ro/SignUp/AddTrust.php";</script>';

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

}

$conn->close();

?>