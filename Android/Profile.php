<?php
 session_start();
 $id = $_SESSION["ID"];
 echo $_SESSION["ID"];
 if(isset($_POST["fb-log-id"]))
 {
     $id = $_POST["fb-log-id"];
      $_SESSION["ID"] = $id;
 }
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
$sql = 'SELECT * FROM `Users` WHERE User_ID = "'.$id.'"';
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    
    $username=$row["UserName"];
    $name=$row["Name"];
    $image=$row["ImageURL"];
   // echo $username.$name.$image;
    }
} else {
    echo "Wrong Password";
}


?>
 <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css"  media="screen,projection"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <style>
          /*  body{
                background-color:#e6e6e6;
            }*/
        </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
     <!--   
    <a href="https://dordevoi.ro/Safe/AddSafe.php">
						<div class="safe1 col-lg-4 ">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%; filter:invert(100%);"></center>
				   	  		<center><h3>Adauga un mesaj securizat</h3></center>
				   	    </div>
                    </a>
                    -->
                    
                    <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Safe</a></li>
        <li class="tab col s3"><a  href="#test2">Direct</a></li>
        <li class="tab col s3"><a href="#test3">Persoane</a></li>
        <li class="tab col s3"><a href="#test4">Public</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
        
            <div class="row" style="background-color:grey;">
                <br>
                    <center>
                        <a class="btn-floating btn-large pulse"><i class="material-icons">add</i></a>
                        <br>
                        <p>Apasati pe "+" pentru a adauga un safe nou</p>
                    </center>
                
            </div>
            
            
        <div class="row">
            <div class="col s12 m7">
              <div class="card">
                <div class="card-image">
                  <img src="https://materializecss.com/images/sample-1.jpg">
                  <span class="card-title">Nume Safe</span>
                </div>
              </div>
            </div>
          </div>
          
          
        <?php
           	  	
        $sql = "SELECT * FROM `Safes` WHERE Owner_ID =" .$id;
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {     
          
        				
            // output data of each row
            while($row = $result->fetch_assoc()) {
               echo ' 
                <div class="row">
                    <div class="col s12 m7">
                      <div class="card">
                        <div class="card-image" id="card1'.$row["SafeID"].'">
                          <img onerror="alt'.$row["SafeID"].'()" id="image'.$row["SafeID"].'" src="https://dordevoi.ro/Safe/uploads/'.$row["SafeID"].'.jpg">
                          <span class="card-title">'.$row["Reciever"].'</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <script> $("#card1'.$row["SafeID"].'").click(function() {
                $("#safename").val("'.$row["SafeID"].'");
                $("#form1").submit();
        });
             /* $("#delete1'.$row["SafeID"].'").click(function() {
                $("#delid").val("'.$row["SafeID"].'")});*/
        
        function alt'.$row["SafeID"].'() {
            document.getElementById("image'.$row["SafeID"].'").src = "https://dordevoi.ro/MyProfile/logo.png"
        }
        
        </script>';
               
               
               
               /*
               <a><div class="safe1 col-lg-4 " >
                        <h3 style="text-align: right; font-size:20px; "><span class="glyphicon glyphicon-trash" id="delete1'.$row["SafeID"].'" data-toggle="modal" data-target="#confirm-delete"></span></h3>
                       <div id="card1'.$row["SafeID"].'">
           	  		<center><img  src="https://dordevoi.ro/Safe/uploads/'.$row["SafeID"].'.jpg" id="image'.$row["SafeID"].'" height="275px" onerror="alt'.$row["SafeID"].'()" style="max-width: 100%;
            max-height: 90%;"  ></center>
           	  		<center><h3>'.$row["Reciever"].'</h3></center>
           	  		</div>
           	  	</div></a>
           	  	*/
            }
        } 
           	  	
           	  	?> 
        <form id="form1" method="Post" action="https://dordevoi.ro/Safe/EditSafeMobile.php">
            <input type="text" id="safename" name="SafeID">
        </form>
    </div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>
                   
                    
                    
                    
                    

    
    
    
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>
      <script>
            M.AutoInit();

      </script>
    </body>
  </html>