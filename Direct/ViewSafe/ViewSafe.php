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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style type="text/css">

	html,body{

		background-color: #b7b9bc;

	}



/** timeline box structure **/

.timeline {

  list-style: none;

  padding: 20px 0 20px;

  position: relative;

}



.timeline:before {

  top: 0;

  bottom: 0;

  position: absolute;

  content: " ";

  width: 3px;

  background-color: #eee;

  left: 50%;

  margin-left: -1.5px;

}



.tldate {

  display: block;

  width: 200px;

  background: #414141;

  border: 3px solid #212121;

  color: #ededed;

  margin: 0 auto;

  padding: 3px 0;

  font-weight: bold;

  text-align: center;

  -webkit-box-shadow: 0 0 11px rgba(0,0,0,0.35);

}



.timeline li {

  margin-bottom: 25px;

  position: relative;

}



.timeline li:before, .timeline li:after {

  content: " ";

  display: table;

}

.timeline li:after {

  clear: both;

}

.timeline li:before, .timeline li:after {

  content: " ";

  display: table;

}



/** timeline panels **/

.timeline li .timeline-panel {

  width: 46%;

  float: left;

  background: #fff;

  border: 1px solid #d4d4d4;

  padding: 20px;

  position: relative;

  -webkit-border-radius: 8px;

  -moz-border-radius: 8px;

  border-radius: 8px;

  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);

  -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);

  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);

}



/** panel arrows **/

.timeline li .timeline-panel:before {

  position: absolute;

  top: 26px;

  right: -15px;

  display: inline-block;

  border-top: 15px solid transparent;

  border-left: 15px solid #ccc;

  border-right: 0 solid #ccc;

  border-bottom: 15px solid transparent;

  content: " ";

}



.timeline li .timeline-panel:after {

  position: absolute;

  top: 27px;

  right: -14px;

  display: inline-block;

  border-top: 14px solid transparent;

  border-left: 14px solid #fff;

  border-right: 0 solid #fff;

  border-bottom: 14px solid transparent;

  content: " ";

}

.timeline li .timeline-panel.noarrow:before, .timeline li .timeline-panel.noarrow:after {

  top:0;

  right:0;

  display: none;

  border: 0;

}



.timeline li.timeline-inverted .timeline-panel {

  float: right;

}



.timeline li.timeline-inverted .timeline-panel:before {

  border-left-width: 0;

  border-right-width: 15px;

  left: -15px;

  right: auto;

}



.timeline li.timeline-inverted .timeline-panel:after {

  border-left-width: 0;

  border-right-width: 14px;

  left: -14px;

  right: auto;

}





/** timeline circle icons **/

.timeline li .tl-circ {

  position: absolute;

  top: 23px;

  left: 50%;

  text-align: center;

  background: #6a8db3;

  color: #fff;

  width: 35px;

  height: 35px;

  line-height: 35px;

  margin-left: -16px;

  border: 3px solid #90acc7;

  border-top-right-radius: 50%;

  border-top-left-radius: 50%;

  border-bottom-right-radius: 50%;

  border-bottom-left-radius: 50%;

  z-index: 99999;

}





/** timeline content **/



.tl-heading h4 {

  margin: 0;

  color: #c25b4e;

}



.tl-body p, .tl-body ul {

  margin-bottom: 0;

}



.tl-body > p + p {

  margin-top: 5px;

}



/** media queries **/

@media (max-width: 991px) {

  .timeline li .timeline-panel {

    width: 44%;

  }

}



@media (max-width: 700px) {

  .page-header h1 { font-size: 1.8em; }

  

  ul.timeline:before {

    left: 40px;

  }

  

  .tldate { width: 140px; }



  ul.timeline li .timeline-panel {

    width: calc(100% - 90px);

    width: -moz-calc(100% - 90px);

    width: -webkit-calc(100% - 90px);

  }



  ul.timeline li .tl-circ {

    top: 22px;

    left: 22px;

    margin-left: 0;



  }

  ul.timeline > li > .tldate {

    margin: 0;

  }



  ul.timeline > li > .timeline-panel {

    float: right;

  }



  ul.timeline > li > .timeline-panel:before {

    border-left-width: 0;

    border-right-width: 15px;

    left: -15px;

    right: auto;

  }



  ul.timeline > li > .timeline-panel:after {

    border-left-width: 0;

    border-right-width: 14px;

    left: -14px;

    right: auto;

  }

}



.nav-tabs > li, .nav-pills > li {

    float:none;

    display:inline-block;

    *display:inline; /* ie7 fix */

     zoom:1; /* hasLayout ie7 trigger */

}



.nav-tabs, .nav-pills {

    text-align:center;

}







</style>

<body>

  <div class="container-fluid">

  	<div class="row"><div class="col-lg-12" style="height: 100px;"></div></div>

  	<div class="row">

  		<div class="col-lg-12">

  			<center>

           <img src=<?php echo '"https://dordevoi.000webhostapp.com/Safe/uploads/'.$id.'.jpg"'; ?> style="height: 350px;" class="img-thumbnail">

           <h1 ><i><strong><?php echo $safe["Reciever"]; ?></strong></i></h1>

           <h3><i>Safe ID: <?php echo $safe["SafeID"]; ?></i></h3>

           <h3><i>Access Key: <?php echo $safe["Access_Key"]; ?></i></h3>

           





            </center>

  		</div>

  		<div class="col-lg-12" >

  			<ul class="timeline">

    <li><div class="tldate">This is your Safe <br>Feel free to download all the images and videos, you are the only one who can access the safe</div></li>

    

    

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

        if($i%2==0)

        {

          echo '<li class="timeline-inverted">

      <div class="tl-circ"></div>

      <div class="timeline-panel">

        <div class="tl-heading">

          <h4>'.$row["Type"].' message</h4>

          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>'.$row["Date_Available"].'</small></p>

        </div>

        <div class="tl-body">

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

<video class="embed-responsive-item" controls  poster="http://www2.videojs.com/img/html5-video.png"> 

<source src="https://dordevoi.ro/Safe/Assets/record/uploads/'.$row["Media_URL"].'.webm" type="video/mp4">

</video>



</div>';}

            if($row["Type"]=="Document")

      {

          echo '<center><a href="'.$row["Media_URL"].'" download="DorDeVoi"><button type="button" class="btn btn-danger">Dowload File</button></a></center>';

      }

        echo '</div>

      </div>

    </li>';  

        }

        else 

        {

          echo '<li>

      <div class="tl-circ"></div>

      <div class="timeline-panel">

        <div class="tl-heading">

          <h4>'.$row["Type"].' message</h4>

          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>'.$row["Date_Available"].'</small></p>

        </div>

        <div class="tl-body">

          <p>'.$row["Message"].'</p>';

          if($row["Type"]=="Image")

          {echo '<img src="'.$row["Media_URL"].'" width="80%">' ;}

          

           if($row["Type"]=="Audio")

            {

                echo '<audio controls >';

                if($row["VideoType"]=="mp3")

                {echo '<source src="'.$row["Media_URL"].'" type="audio/mpeg">';}

                if($row["VideoType"]=="wav")

                 {echo'<source src="'.$row["Media_URL"].'" type="audio/wav">';}



echo '</audio>';

            }

          

          if($row["Type"]=="Video")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video class="embed-responsive-item" controls  poster="http://www2.videojs.com/img/html5-video.png"> 

<source src="'.$row["Media_URL"].'" type="video/mp4">

</video>



</div>';}


              if($row["Type"]=="Recorded")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video class="embed-responsive-item" controls  poster="http://www2.videojs.com/img/html5-video.png"> 

<source src="https://dordevoi.ro/Safe/Assets/record/uploads/'.$row["Media_URL"].'.webm" type="video/mp4">

</video>



</div>';}


      if($row["Type"]=="Document")

      {

          echo '<center><a href="'.$row["Media_URL"].'" download="DorDeVoi"><button type="button" class="btn btn-danger">Dowload File</button></a></center>';

      }

        echo '</div>

      </div>

    </li>';  

        }

        

        

       $i++; 

    }

    else { echo '<li><div class="tldate">This message will be available on '.$date.'</div></li>'; }

    }

} 

    ?>

    

    <li><div class="tldate">This is everything available untill today. Check back every day to discover if you have any new messages</div></li>

    

  </ul>

  		</div>



  	</div>





  </div>

</body>

</html>