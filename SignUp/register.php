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

//else echo "ok";



$usrname ="'". $_POST["username"]."' ";

$pass = "'".$_POST["password"]."' ";

$phone="'".$_POST["phone"]."' ";

$mail="'".$_POST["email"]."' ";

$name="'".$_POST["name"]."' ";

$url="'".$_POST["URL"]."' ";

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



$sql = "SELECT * FROM `Users` WHERE UserName LIKE ".$usrname;

$result = $conn->query($sql);





if ($result->num_rows > 0) {

    // output data of each row

  

        echo "<center><h2 style='color:red;'>Acest email este asociat altui cont . Va rugam sa incercati cu o alta adresa de email.</center></h2>";

} 

else {

   // echo "0 results";

$values = $usrname.",".$name.",".$pass.",".$mail.",".$phone.",".$url.",";

$sql = "INSERT INTO `Users`(`UserName`, `Name`, `Password`, `Email`, `Phone`,`ImageURL`,`Max_Size`) VALUES (" .$values.'3000'.")";

if ($conn->query($sql) === TRUE) {

    $last_id = $conn->insert_id;

    $_SESSION["SignUpID"] = $last_id;

    //echo "New record created successfully";

    echo '<script>window.top.location.href = "https://dordevoi.ro/LogInPage/LogIn_with_modal_confirm_mail.php";</script>';

$key = generateRandomString(15);

$to = $_POST["email"];
$subject = "Confirmati email-ul";

$message = "
<html>
<head>
<title>Confirmati email</title>
</head>
<body>
<p>Accesati acest link pentru a confirma email-ul</p>
<a href=https://dordevoi.ro/SignUp/verifica.php?id=".$last_id."&key=".$key.">https://dordevoi.ro/SignUp/verifica.php?id=".$last_id."&key=".$key."</a>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


 mail($to,$subject,$message,$headers);

$sql = "INSERT INTO `Cheie`(`User_ID`,`Cheie`) VALUES ('" .$last_id."','".$key."')";
echo $key;
if ($conn->query($sql) === TRUE) {
    echo "ok";
}


}}

$conn->close();

?>