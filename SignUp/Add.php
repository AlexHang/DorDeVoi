<?php

session_start();

$ID = $_SESSION["ID"];


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



$i=0;



$sql = 'INSERT INTO `Trusted`(`User_ID`, `Name`, `Email`, `Phone`, `Adress`) VALUES ("'.$ID.'","'.$_POST["Name1"].'","'.$_POST["Email1"].'","'.$_POST["Phone1"].'","'.$_POST["Adress1"].'")';



if ($conn->query($sql) === TRUE) {

    echo "New record created successfully";

    $i++;

    $last_id = $conn->insert_id;

    

    $target_dir = "uploads/";

$target_file = $target_dir .$last_id.".jpg";

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);

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

    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";

    } else {

        echo "Sorry, there was an error uploading your file.";

    }

}



} 

else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}


echo '<script>window.location = "https://dordevoi.ro/MyProfile/Profile.php";</script>';










?>