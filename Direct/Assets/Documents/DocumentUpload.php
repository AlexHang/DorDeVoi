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





$sql = 'INSERT INTO `Direct_Assets`(`Type`, `Message`, `Date_Available`, `SafeID`) VALUES ("Document","'.$comment.'","'.$date.'","'.$id.'")';





if ($conn->query($sql) === TRUE) {

     $last_id = $conn->insert_id;

    echo "New record created successfully";

   



 echo "Upload:".pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION) . "<br />";

    echo "Type: " . $_FILES["file"]["type"] . "<br />";

    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";

    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";





$name=$last_id.".";



$allowedExts = array("docx", "doc","pptx","pdf","xls");

$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);



if (

 ($_FILES["file"]["size"] < 419430400) // 50MB

&& in_array($extension, $allowedExts))



  {

  if ($_FILES["file"]["error"] > 0)

    {

    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

    $conn->query("'"."DELETE FROM `Direct_Assets` WHERE`Asset_ID` =".$last_id."'");

    }

  else

    {

    echo "Upload:".$name .pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION) . "<br />";

    echo "Type: " . $_FILES["file"]["type"] . "<br />";

    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";

    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";



    

      {

      move_uploaded_file($_FILES["file"]["tmp_name"],

      "upload/" .$name.pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));

      echo "Stored in: " . "upload/" .$last_id.pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

      }

    }

  }

else

  {

  echo "Invalid file";

  }

   $conn->query("UPDATE `Direct_Assets` SET `Media_URL` = 'https://dordevoi.ro/Direct/Assets/Documents/upload/".$last_id.".".pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION)."',`VideoType`='".pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION)."' WHERE `Direct_Assets`.`Asset_ID` =".$last_id);

  echo "<script> 

  window.close();
   
   </script>"; 

  }

?>