<?php

session_start();

$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";

$id=$_POST["SafeID"];



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 



$sql = "SELECT * FROM `Safes` WHERE SafeID =".$id;

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row

    while($row = $result->fetch_assoc()) {

        $safe=$row;

    }

} else {

    echo "0 results";

}





?>

<!DOCTYPE html>

<html>

<head>

	<title>My Safe</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>

<style type="text/css">

	html,body{

		
      background: #0F2027;
    background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
    background: linear-gradient(#2C5364, #203A43, #0F2027);
}

	}

</style>

<body>

  <div class="container-fluid">

  	<div class="row"><div class="col-lg-12" style="height: 100px;"></div></div>

  	<div class="row">

  		<div class="col-lg-12">


  			<center>

           <img src=<?php echo '"https://dordevoi.ro/Safe/uploads/'.$id.'.jpg"'; ?> style="max-width:50%;" class="img-thumbnail">
<!--
           <h1 ><i><strong><?php echo $safe["Reciever"]; ?></strong></i></h1>

           <h3><i>Safe ID: <?php echo $safe["SafeID"]; ?></i></h3>

           <h3><i>Access Key: <?php echo $safe["Access_Key"]; ?></i></h3>

           
-->




            </center>

  		</div>

  		<div class="col-lg-12" >
 
 <center>
     <h1 style="color:white;">Bine ati Venit, acesta este Safe-ul dumneavoastra</h1>
 </center>


    <?php

    $sql = "SELECT * FROM `Assets` WHERE SafeID =".$id." ORDER BY `Date_Available`";                 

    $result = $conn->query($sql);

if ($result->num_rows > 0) {

    $i=0;

    // output data of each row

    while($row = $result->fetch_assoc()) {

        

        $today = date("Y-m-d");



$date =$row["Date_Available"];







if ($date <= $today)

{


        

          echo '<div class="card">
    <div class="card-header">

          <h4>'.$row["Type"].' message</h4>

          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>'.$row["Date_Available"].'</small></p>
</div>
    <div class="card-body">
      <center>

          <p>'.$row["Message"].'</p>';

          if($row["Type"]=="Image")

          {echo '<img src="'.$row["Media_URL"].'" width="80%">' ;}

              if($row["Type"]=="Video")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video class="embed-responsive-item" controls  poster="http://www2.videojs.com/img/html5-video.png"> 

<source src="'.$row["Media_URL"].'" type="video/mp4">

</video>



</div>';}

            if($row["Type"]=="Audio")

            {

                echo '<audio controls >';

                if($row["VideoType"]=="mp3")

                {echo '<source src="'.$row["Media_URL"].'" type="audio/mpeg">';}

                if($row["VideoType"]=="wav")

                 {echo'<source src="'.$row["Media_URL"].'" type="audio/wav">';}



echo '</audio>';

            }
            
                      if($row["Type"]=="Recorded")

        { echo '<div class="embed-responsive embed-responsive-16by9">

<video id="vid'.$row["Media_URL"].'" class="embed-responsive-item" controls  poster="https://dordevoi.ro/MyProfile/logo.png"> 

<source src="https://dordevoi.ro/Safe/Assets/record/uploads/'.$row["Media_URL"].'.webm" type="video/mp4">
</video>
<audio id="audio'.$row["Media_URL"].'" class="embed-responsive-item" controls style="display:none">
<source src="https://dordevoi.ro/Safe/Assets/record/uploads/'.$row["Media_URL"].'.wav" type="audio/wav">
</audio>


<script>
    document.getElementById("vid'.$row["Media_URL"].'").ontimeupdate = function() {
        
        document.getElementById("audio'.$row["Media_URL"].'").currentTime = document.getElementById("vid'.$row["Media_URL"].'").currentTime;
    };
    document.getElementById("vid'.$row["Media_URL"].'").onplay = function() {
        
        document.getElementById("audio'.$row["Media_URL"].'").play()
    };
    
    document.getElementById("vid'.$row["Media_URL"].'").onpause  = function() {
        
        document.getElementById("audio'.$row["Media_URL"].'").pause()
    };
    
</script>

</div>';}

            if($row["Type"]=="Document")

      {

          echo '<center><a href="'.$row["Media_URL"].'" download="DorDeVoi"><button type="button" class="btn btn-danger">Dowload File</button></a></center>';

      }

        echo '
        </center>
        </div> 
    <div class="card-footer"></div>
  </div>
  <h2><br></h2>
  ';  

        


   


    }

    else { echo '
    <div class="card" style="background-color:black;">
  <div class="card-header"></div>
  <div class="card-body">
      <center><p style="color:white;">Acest mesaj va fi disponibil in data de'.$date.'</p></div> 
</div>'; }

    }

} 

    ?>

    
<div class="card" style="background-color:black;">
  <div class="card-header"></div>
  <div class="card-body">
      <center><p style="color:white;">Acestea sunt toate mesajele disponibile pana astazi. Vet primi o notificare atunci cand un mesaj nou va fi disponibil.</p></div> 
</div>
    

    



  		</div>



  	</div>





  </div>

</body>

</html>