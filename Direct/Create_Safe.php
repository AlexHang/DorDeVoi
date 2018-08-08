<?php
session_start();
$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";

function generateRandomString($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


{
$value = '"'.$_SESSION["ID"].'","'.$_POST["reciever"].'","Direct","'.$_POST["phone"].'","'.$_POST["email"].'","'.$_POST["adress"].'"';}
// else {$value = '"'.$_SESSION["ID"].'","'.$_POST["reciever"].'","'.$_POST["visibility"].'","'.$_POST["comment"].'","'." ".' ","'.$_POST["email"].'"';}

$sql = "INSERT INTO `Direct`( `User_ID`, `Name`,`Type`,`Phone`,`Email`,`Adress` ) VALUES (".$value.")";
if ($conn->query($sql) === TRUE) {
     $last_id = $conn->insert_id;
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


$target_dir = "uploads/";
$target_file = $target_dir . $last_id.".jpg";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.
        
        <script>
                window.location = 'https://dordevoi.ro/MyProfile/Profile.php';
        </script>";
    } else {
        echo "Sorry, there was an error uploading your file.";
        
    }
}echo "<script>
                window.location = 'https://dordevoi.ro/MyProfile/Profile.php';
        </script>";
?>
