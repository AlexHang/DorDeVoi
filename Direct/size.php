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



$total = 0;



$sql = "SELECT * FROM `Assets` INNER JOIN Safes ON Assets.SafeID = Safes.SafeID INNER JOIN Users ON Users.User_ID = Safes.Owner_ID WHERE Safes.Owner_ID =".$_SESSION["ID"];



$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row

    while($row = $result->fetch_assoc()) {

       // echo $row["Media_URL"];

        $total = $total + filesize(str_replace("https://dordevoi.ro/Safe",".",$row["Media_URL"]));

        $size = $row["Max_Size"];

    }

} else {

    echo "0 results";

}

$used =  number_format($total/1048576, 2);

" MB Used/".$size."MB Total Available ";

$percentage = ($used/$size)*100;





$left = 100 -$percentage;



								   

								 

								

				

?>







<!DOCTYPE html>

<html lang="en">

<head>

  <title>Bootstrap Example</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style="background-color:#444c57;">



<div class="container-fluid" style="background-color:#444c57;">

    <center><h1 style="color:white;">Spatiu de stocare</h1></center>

    <p style="color:white;"  >Spatiu Folosit: <?php echo $used." MB ";?></p>

    <p style="color:white;" >Spatiu Liber: <?php echo $size." MB "; ?></p>

  <div class="progress">

  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" style="width:<?php echo $percentage; ?>%">

    Free space <?php echo $percentage; ?>% used

  </div>

  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:<?php echo $left ;?>%">

    <?php echo $left; ?>% free

  </div>

  

</div>

    <center><button type="button" class="btn btn-primary">Mariti capacitatea de stocare</button>
</center>

</div>



</body>

</html>