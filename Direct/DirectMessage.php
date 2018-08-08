<?php



session_start();

$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";




$name=$_POST["Name"];

$phone=$_POST["Phone"];

$email=$_POST["Email"];

$comment=$_POST["comment"];

$date=$_POST["Date"];

$id=$_SESSION["ID"];



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 





$sql = 'INSERT INTO `Direct`(`Message`, `Date_Available`, `Email`, `Phone`, `User_ID`, `DeliveryType`) VALUES ("'.$comment.'","'.$date.'","'.$email.'","'.$phone.'","'.$id.'","Virtual")';





if ($conn->query($sql) === TRUE) {

     $last_id = $conn->insert_id;

    echo "New record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();





$target_dir = "uploads/";

$target_file1 = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

$target_file = $target_dir . $last_id.".".$imageFileType;

// Check if image file is a actual image or fake image


// Check if file already exists

if (file_exists($target_file)) {

    echo "Sorry, file already exists.";

    $uploadOk = 0;

}

// Check file size

if ($_FILES["fileToUpload"]["size"] > 5000000000) {

    echo "Sorry, your file is too large.";

    $uploadOk = 0;

}

// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

&& $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType != "mp3" && $imageFileType != "wav" && $imageFileType != "avi" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "ppt" && $imageFileType != "pptx" && $imageFileType != "xls" && $imageFileType != "pdf" ) {

    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

    $uploadOk = 0;

}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file

} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "UPDATE `Direct` SET `Media_URL` = 'https://dordevoi.000webhostapp.com/Direct/uploads/".$last_id.".".$imageFileType."' WHERE `ID` =".$last_id;

         $conn->query($sql);

         echo $sql;

    } else {

        echo "Sorry, there was an error uploading your file.";

    }

}

?>