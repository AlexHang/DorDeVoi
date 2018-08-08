<?php
session_start();
$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";
$comment=$_POST["comment"];
$date=$_POST["date"];
$id=$_POST["ID"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = 'INSERT INTO `Assets`(`Type`, `Message`, `Date_Available`, `SafeID`) VALUES ("Image","'.$comment.'","'.$date.'","'.$id.'")';


if ($conn->query($sql) === TRUE) {
     $last_id = $conn->insert_id;
    echo "New record created successfully";
    $conn->query("UPDATE `Assets` SET `Media_URL` = 'https://dordevoi.ro/Safe/Assets/Images/uploads/".$last_id.".jpg' WHERE `Assets`.`Asset_ID` =".$last_id);
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
/* // Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
*/
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
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
  echo "<script> 

  window.close();
   
   </script>"; 
?>