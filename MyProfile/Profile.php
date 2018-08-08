<?php
 session_start();
 $id = $_SESSION["ID"];
// echo $_SESSION["ID"];
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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>My Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
     <link href="assets/flip.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/chart-master/Chart.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">


    .nav-tabs > li {
    float:none;
    display:inline-block;
    zoom:1;
}

.nav-tabs {
    text-align:center;
}

    .addtrust:hover{
        
        -webkit-filter: invert(100%) ;
        -moz-filter: invert(100%) ;
        -o-filter: invert(100%) ;
        -ms-filter: invert(100%);
        filter: invert(100%) );
        
    }

    .blurimg:hover{
        -webkit-filter: sepia(100%);
-moz-filter: sepia(100%);
-o-filter: sepia(100%);
-ms-filter: sepia(100%);
filter: sepia(100%);
    }

	.image-preview-input {
    position: relative;
	overflow: hidden;
	margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
.futuristic-bg{
    
    background: #0F2027;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(#2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    
}

	.safe1 {
    height: 400px;
   /* background-color: #1c546f;
    border: 5px solid black;
    border-radius: 25px; 
   background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);   Chrome 10-25, Safari 5.1-6
background: linear-gradient(#2C5364, #203A43, #0F2027);  */
}

.safe1:hover {
    animation-name: upjump;
   animation-duration: 1s;
   animation-fill-mode: both;
    height: 400px;
   background-color: #1c546f;
   
   
    /*border: 5px solid black;*/
     -webkit-filter: grayscale(10%);
-moz-filter:grayscale(10%);
-o-filter: grayscale(10%);
-ms-filter: grayscale(10%);
filter: grayscale(10%); 
}

#popover{
  
    max-width:400px;
}

#popover1{
  
    max-width:400px;
}
#popover2{
  
    max-width:400px;
}
#popover3{
  
    max-width:400px;
}

p{
    font-size:25px;
}

li {
    font-size: 25px;
    margin: 0 0 0 2em;
}

@keyframes flip{
0% {-webkit-transform: rotateY(0deg); /* Safari */
    transform: rotateY(0deg); /* Standard syntax */}
100% {-webkit-transform: rotateY(180deg); /* Safari */
    transform: rotateY(180deg); /* Standard syntax */}

}

.flipcard:hover {
   animation-name: flip;
   animation-duration: 1s;
   animation-fill-mode: both;

}


@keyframes upjump {
   0%   { left:0px; top:0px;}
    100% { left:0px; top:-50px;}
}

.upjump:hover{
    animation-name:upjump;
    animation-duration:1s;
    animation-fill-mode: both;
}

/*
a{
    color:white;
}
*/
h3,h2,h1{
    color:white;
}


/* Removes the clear button from date inputs */
input[type="date"]::-webkit-clear-button {
    display: none;
}

/* Removes the spin button */
input[type="date"]::-webkit-inner-spin-button { 
    display: none;
}

/* Always display the drop down caret */
input[type="date"]::-webkit-calendar-picker-indicator {
    color: #2c3e50;
}

/* A few custom styles for date inputs */
input[type="date"] {
    appearance: none;
    -webkit-appearance: none;
    color: #95a5a6;
    font-family: "Helvetica", arial, sans-serif;
    font-size: 18px;
    border:1px solid #ecf0f1;
    background:#ecf0f1;
    padding:5px;
    display: inline-block !important;
    visibility: visible !important;
}

input[type="date"], focus {
    color: #95a5a6;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
}


</style>


  </head>

  <body style="background-color:white;">

  <section style="padding:0px;" id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header style="background-color: #424a5d; height: 100px; " class="header futuristic-bg">
            <!--logo start-->
            <a href="Profile.php" class="logo"><b><h1><img src="logo.png" style="height:2em; margin-top:-20px;"></h1></b></a>
            <!--logo end-->
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          
          <div id="sidebar" style="margin-top:100px;"  class="nav-collapse futuristic-bg">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu " id="nav-accordion" >
              
              	  <p class="centered"><a href="Profile.php"><img src="<?php echo $image; ?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $name; ?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="https://dordevoi.ro/MyProfile/Profile.php">
                          <i class="fas fa-home"></i>
                          <span>Acasa</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="How-to-Safe.php" >
                          <i class="fas fa-unlock-alt"></i>
                          <span>Mesaje Securizate</span>
                      </a>
                  </li>
                  
                   <li class="sub-menu">
                      <a href="How-to-Safe.php" >
                          <i class="fas fa-paper-plane"></i>
                          <span>Mesaje Directe</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="How-to-Persoane.php" >
                          <i class="fas fa-users"></i>
                          <span>Persoane de incredere</span>
                      </a>
                     
                  </li>
                  
                   <li class="sub-menu">
                      <a href="How-to-Persoane.php" >
                          <i class="fas fa-globe"></i>
                          <span>Mesaje Publice</span>
                      </a>
                     
                  </li>
                  
                   <li class="sub-menu">
                      <a data-toggle="modal" data-target="#myModalCadou">
                          <i class="fas fa-shopping-bag"></i>
                          <span>Livrare Fizica</span>
                      </a>
                     
                  </li>

                   <li class="sub-menu">
                      <a href="Store.php" >
                          <i class="fas fa-shopping-bag"></i>
                          <span>Magazin</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="Intrebari.php" >
                          <i class="fas fa-shopping-bag"></i>
                          <span>Intrebari frecvente</span>
                      </a>
                  </li>
                   <li class="sub-menu">
                      <a data-toggle="modal" data-target="#administrare" >
                          <i class="fas fa-shopping-bag"></i>
                          <span>Administrate cont</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="How-to-Persoane.php" >
                          <i class="fas fa-money-bill-alt"></i>
                          <span>Tarife</span>
                      </a>
                     
                  </li>
                  
                  <li class="sub-menu">
                      <a href="logout.php" >
                          <i class="fas fa-unlock-alt"></i>
                          <span>Deconectati-va</span>
                      </a>
                  </li>
                  
                  
                  
                  
                  <li class="sub-menu">
                      <div style="background-color:#444c57; width:100%;">
                      		
                      		
			                        <iframe style="border:5px solid #444c57; border-radius:25px; " width="100%" height="300 px" src="https://dordevoi.ro/Safe/size.php">
			                            
			                        </iframe>
								

                      		
						</div><!-- /col-md-4 -->
                      
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      
      <!-- Modal -->
<div id="administrare" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#424a5d;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <center> <h1 class="modal-title"><img src="logo.png" style="height:2em; margin-top:0px;"></h1></center>
      </div>
      <div class="modal-body">
        
          <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Date personale</a></li>
    <li><a data-toggle="tab" href="#menu2">Upgrade</a></li>
    <li><a data-toggle="tab" href="#menu3">Parola</a></li>
  </ul>
<center>
  <div class="tab-content" style="max-width:300px;">
    <div id="home" class="tab-pane fade in active">
      <h3>Bine ati venit la sectiunea de administrare cont</h3>
      <p>De aici puteti sa modificati datele dumneavoastra sau puteti achizitiona un abonament cu mai mult spatiu de stocare</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <form action="administrare/date.php" method="POST">
    <div class="form-group">
     <h2>Email:</h2>
      <input type="text" name="Email" class="form-control" required>
    </div>
    <div class="form-group">
      <h2>Telefon:</h2>
      <input type="text" name="Phone" class="form-control" required>
    </div>
     <center><input type="submit" class="btn btn-success"></center>
  </form>
    </div>
    <div id="menu2" class="tab-pane fade">
           
    </div>
     <div id="menu3" class="tab-pane fade">
           <form action="administrare/parola.php" method="POST">
    <div class="form-group">
     <h2>Parola Noua:</h2>
      <input type="password" name="new" class="form-control" required>
    </div>
    <center><input type="submit" class="btn btn-success"></center>
  </form>
    </div>
  </div></center>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content" style="padding:0px;">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  
                  	<div class="row mtbox" >
                  		<center><h1 style="color:#2b59ad;">Alege cum doresti sa trimiti un mesaj</h1></center>
                  		<h1><br></h1>

                  		<div  data-toggle="modal" data-target="#myModal" class="col-lg-3 col-md-3 box0 upjump">
                  			<div class="box1">
                  			    <a id="popoverData" href="#" data-content="Aceste mesaje pot fi accesate doar prin intermediul unei chei de acces generata automat de catre site. Atunci cand mesajul va deveni disponibil pentru destinatar, acesta va primi pe mail cheia de acces si ID-ul seif-ului, astfel incat doar el va putea accesa acel safe. Tot procesul este automatizat, astfel incat puteti transmite orice fel de mesaj doriti: Text, Imagini, Video, Audio si Documente fara a va face griji ca acestea vor ajunge la alta persoana." rel="popover" data-placement="bottom" data-original-title="Mesaje prin Safe" data-trigger="hover">
					  			<h1 style="font-size:60px;color:#428bca;"><i class="fas fa-unlock-alt"></i></h1>
					  			<h3 style="color:#428bca">Mesaj Securizat</h3>
					  			</a>
                  			</div>
					  			<p style="color:#066787;">Trimite un mesaj ce poate fi accesat doar prin intermediul unei chei de acces</p>
					  			
                  		</div>
                  		
                  		
                  	
                  		<script>
                  		    $('#popoverData').popover();
                  		</script>
                  		<div data-toggle="modal" data-target="#myModal2" class="col-lg-3 col-md-3  box0 upjump">
                  			<div class="box1">
                  			    <a id="popoverData1" href="#" data-content="Aceste mesaje vor fi livrate direct destinatarului prin email notificat telefonic sau direct la adresa specificata de dumneavoastra, fara a solicita o cheie de acces." rel="popover" data-placement="bottom" data-original-title="Mesaje Directe" data-trigger="hover">
					  			<h1 style="font-size:60px; color:#428bca;"><i class="fas fa-paper-plane"></i></h1>
					  			<h3 style="color:#428bca">Direct</h3>
					  			</a>
                  			</div>
					  			<p style="color:#066787;">Trimite un mesaj direct, ce va fi livrat de catre noi la o data stabilita</p>
                  		</div>
                  		<script>
                  		    $('#popoverData1').popover();
                  		</script>
                  		<div data-toggle="modal" data-target="#myModal3"  class="col-lg-3 col-md-3 box0 upjump">
                  			<div class="box1">
                  			    <a id="popoverData2" href="#" data-content="Aceste mesaje vor fi livrate destinatarului de catre una dintre persoanele dumneavoastra de incredere. Noi vom notifica persoana respectiva atunci cand dumneavoastra compuneti mesajul, si in ziua livrarii. Astfel, puteti fi sigur ca rudele dumneavoastra nu vor uita niciodata sa livreze mesajul" rel="popover" data-placement="bottom" data-original-title="Mesaje trimise prin intermediul unei persoane de incredere" data-trigger="hover">
					  			<h1 style="font-size:60px; color:#428bca;"><i class="fas fa-users"></i></h1>
					  			<h3 style="color:#428bca">Persoana</h3>
					  			</a>
                  			</div>
					  			<p style="color:#066787;">Trimite un mesaj prin intermediul unei persoane de incredere.</p>
                  		</div>
                  		<script>
                  		    $('#popoverData2').popover();
                  		</script>
                  		<div data-toggle="modal" data-target="#myModal4" class="col-lg-3 col-md-3 box0 upjump">
                  			<div class="box1">
                  			    <a id="popoverData3" href="#" data-content="Aceste mesaje vor fi postate pe conturile noastre de social media (Facebook & YouTube), astfel incat puteti fi sigur de faptul ca opinia dumneavoastra va fi auzita de catre intreaga lume, chiar si dupa trecerea dumneavoastra in nefiinta" rel="popover" data-placement="bottom" data-original-title="Mesaje Publice" data-trigger="hover">
					  			<h1 style="font-size:60px; color:#428bca;"><i class="fas fa-globe"></i></h1>
					  			<h3 style="color:#428bca">Public</h3>
					  			</a>
                  			</div>
					  			<p style="color:#066787;">Lasa un mesaj public ce va fi postat pe conturile noastre de social-media</p>
                  		</div>
                  		
                  		
               
                  	<h1><br></h1>
                  		<div data-toggle="modal" data-target="#myModalCadou" class="col-lg-3 col-md-3 box0 upjump">
                  			<div class="box1">
                  			    <a id="popoverData4" href="#" data-content="Aveti si optiunea de a trimite mesaje fizice (cum ar fi obiectele personale). Completati formularul de trimitere fizica a unui mesaj, si noi va vom contacta cat mai repede posibil pentru a discuta cu dumneavoastra costurile transportului." rel="popover" data-placement="bottom" data-original-title="Mesaje prin Safe" data-trigger="hover">
					  			<h1 style="font-size:60px; color:#428bca;"><i class="fas fa-gift"></i></h1>
					  			<h3 style="color:#428bca">Cadou</h3>
					  			</a>
                  			</div>
					  			<p style="color:#066787;">Trimite un mesaj ce va fi livrat direct de catre noi</p>
					  			
                  		</div>
                  
                  			<div class="col-lg-3 col-md-3 box0 upjump">
                  			<div class="box1">
                  			    <a id="popoverData5" href="Store.php" data-content="Aceste mesaje pot fi accesate doar prin intermediul unei chei de acces generata automat de catre site. Atunci cand mesajul va deveni disponibil pentru destinatar, acesta va primi pe mail cheia de acces si ID-ul seif-ului, astfel incat doar el va putea accesa acel safe. Tot procesul este automatizat, astfel incat puteti transmite orice fel de mesaj doriti: Text, Imagini, Video, Audio si Documente fara a va face griji ca acestea vor ajunge la alta persoana." rel="popover" data-placement="bottom" data-original-title="Mesaje prin Safe" data-trigger="hover">
					  			<h1 style="font-size:60px; color:#428bca;"><i class="fas fa-shopping-cart"></i></h1>
					  			<h3 style="color:#428bca;">Magazin</h3>
					  			</a>
                  			</div>
					  			<p style="color:#066787;">Cumparati un obiect pe care il puteti trimite cuiva drag</p>
					  			
                  		</div>
                  
                  			<div data-toggle="modal" data-target="#Testament"  class="col-lg-3 col-md-3 box0 upjump">
                  			<div class="box1">
					  			<h1 style="font-size:60px; color:#428bca;"><i class="fas fa-shopping-cart"></i></h1>
					  			<h3 style="color:#428bca;">Testament</h3>
					  			</a>
                  			</div>
					  			<p style="color:#066787;">Lasati aici toate gandurile dumneavoastra pentru cei dragi. Poate fi accesat doar cu 2 chei de acces</p>
					  			
                  		</div>
                  	
                  		
                  		<script>
                  		    $('#popoverData3').popover();
                  		</script>
                  		
                  		<!--
                  			<div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                 
                                <a data-toggle="collapse" href="#collapse1">Mai multe detalii despre metodele de trimitere a mesajelor</a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                              <div class="panel-body">
                              
                                <center><h1>Detalii despre Persoanele de incredere</h1></center>
                  		    <p>Persoanele de incredere sunt oameni apropiati dumneavoastra, ce sunt responsbili de comunicarea datei mortii dumneavoastra catre noi. Astfel, noi ne putem asigura ca toate mesajele dumneavoastra vor ajunge la destinatar chiar si dupa trecerea dumneavoastra in nefiinta. <br> Persoanele de incredere pot fi responsabile de urmatoarele lucruri:</p>
                  		    <ol>
                  		        <li><p><b> Comunicarea catre noi a datei decesului dumneavoastra </b> Daca nu veti mai plati taxa lunara timp de 2 luni, noi vom incepe sa contactam persoanele dumneavoastra de incredere, astfel nu vom lua decizii pripite legate de data decesului.</p></li>
                  		        <li><p><b>Transmiterea de mesaje Fizice:</b> Puteti trimite un mesaj fizic prin intermediul unei persoane de incredere, astfel incat veti fi sigur ca mesajul va ajunge la destinatar, chiar daca acesta isi va schimba domiciliul intre timp. </p></li>
                  		        <li><p><b>Transmiterea de mesaje Virtuale</b> Aceste mesaje vor fi livrate destinatarului de catre una dintre persoanele dumneavoastra de incredere. Noi vom notifica persoana respectiva atunci cand dumneavoastra compuneti mesajul, si in ziua livrarii. Astfel, puteti fi sigur ca rudele dumneavoastra nu vor uita niciodata sa livreze mesajul.</p></li>
                  		    </ol>
                              
                              </div>
                              <div class="panel-footer">  </div>
                            </div>
                          </div>
                        </div>
                        -->
                  		
                  		
                  		
                  
                  	
                  	</div><!-- /row mt	-->
  
    <script src="https://cdn.ckeditor.com/4.7.1/basic/ckeditor.js"></script>

  
                  	 
					<!-- Modal -->
<div id="Testament" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body" style="min-height:500px;">
          <form>
              
        <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" style="width:100%;" rows="30" name="testamentarea">Incepeti sa va scrieti aici testamentul</textarea>
</div>
<input type="submit">

</form method="Get">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
     <script>
        CKEDITOR.replace( 'testamentarea');
</script>             	    
                  	<h1><br></h1>
                  	<div class="row futuristic-bg" style="background-color:#DADAD8; ">
                      <center><h1>Mesajele mele securizate (Safe-uri)</h1></center>

					<!--	<div class="col-lg-4 " style="background-color:#444c57; ">
                      		
                      		
			                        <iframe style="border:5px solid lightgrey; border-radius:25px; " width="100%" height="345 px" src="https://dordevoi.ro/Safe/size.php">
			                            
			                        </iframe>
								

                      		
						</div> /col-md-4 -->
						
						
						
                    <a href="https://dordevoi.ro/Safe/AddSafe.php">
						<div class="safe1 col-lg-4 ">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%; filter:invert(100%);"></center>
				   	  		<center><h3>Adauga un mesaj securizat</h3></center>
				   	    </div>
                    </a>
<?php
   	  	
   	 $sql = "SELECT * FROM `Safes` WHERE Owner_ID =" .$id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {     
  
				
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo ' <a><div class="safe1 col-lg-4 " >
                <h3 style="text-align: right; font-size:20px; "><span class="glyphicon glyphicon-trash" id="delete1'.$row["SafeID"].'" data-toggle="modal" data-target="#confirm-delete"></span></h3>
               <div id="card1'.$row["SafeID"].'">
   	  		<center><img  src="https://dordevoi.ro/Safe/uploads/'.$row["SafeID"].'.jpg" id="image'.$row["SafeID"].'" height="275px" onerror="alt'.$row["SafeID"].'()" style="max-width: 100%;
    max-height: 90%;"  ></center>
   	  		<center><h3>'.$row["Reciever"].'</h3></center>
   	  		</div>
   	  	</div></a>
   	  	<script> $("#card1'.$row["SafeID"].'").click(function() {
        $("#safename").val("'.$row["SafeID"].'");
        $("#form1").submit();
});
      $("#delete1'.$row["SafeID"].'").click(function() {
        $("#delid").val("'.$row["SafeID"].'")});

function alt'.$row["SafeID"].'() {
    document.getElementById("image'.$row["SafeID"].'").src = "https://dordevoi.ro/MyProfile/logo.png"
}

</script>';
    }
} else {
    echo '
                <a href="https://dordevoi.ro/Safe/AddSafe.php">
						<div class="safe1 col-lg-4 col-lg-offset-4">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%; filter:invert(100%);"></center>
				   	  		<center><h3>Adauga un mesaj securizat</h3></center>
				   	    </div>
                    </a>
           ';}
   	  	
   	  	?>
   
   	  	<h1><br></h1>
			</div>
			
			
                  			<div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                 
                               	<button style="width:100%;" type="button" class="btn btn-default btn-lg" onclick="$('#DespreSafe1').collapse('toggle');">Mai multe detalii despre Mesajele Securizate (safe-uri)</button>
                              </h4>
                            </div>
                            <div id="DespreSafe1" class="panel-collapse collapse">
                              <div class="panel-body">
                               <h1>Detalii despre mesajele criptate</h1>
                               <p>Safe-ul este cea mai sigura metoda de a trimite mesaje catre cei dragi. Toate aceste mesaje sunt stocate pe serverele noastre, si vor fi livrate destinatarului la data precizata de dumneavoastra. <br>
    <b>Cum functioneaza un Safe? </b>
    <br>- Dumneavoastra puteti crea cate safe-uri doriti pentru persoanele dragi, cat timp va incadrati in spatiul de stocare alocat. Cand creati un safe, veti primi o cheie de acces si un ID al safe-ului. Aceste date vor fi folosite de catre destinatar pentru a accesa safe-ul. <b><i>NU COMUNICATI ACESTE DATE NIMANUI INAFARA DE DESTINATAR!</i></b><br> Destinatarul va primi un mesaj email in ziua in care un mesaj va deveni disponibil pentru el. In email, noi ii vom transmite ID-ul si cheia de acces, pe care el le va introduce pe site-ul nostru pentru a accesa mesajele disponibile pana in ziua respectiva. </p>
                              </div>
                              <div class="panel-footer">  </div>
                            </div>
                          </div>
                        </div>
			
			
			

			
			<!--
                  	<div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">Mai multe detalii despre metodele de trimitere a mesajelor</a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                              <div class="panel-body">Panel Body</div>
                              <div class="panel-footer">Panel Footer</div>
                            </div>
                          </div>
                        </div>
                        
                        -->
                             
                  		    
                  		    <h1><br></h1>
                  		    <!-- style="background-color:#444c57; Border: 5px solid white; border-radius:45px;"-->
                  		    <div class="row futuristic-bg" >
                  		<center><h1>Persoanele mele de incredere</h1></center>
                  		 		  <a href="https://dordevoi.ro/SignUp/AddTrust.php">
						<div class="addtrust col-md-4 ">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%;filter:invert(100%);"></center>
				   	  		<center><h3>Persoana noua de incredere</h3></center>
				   	    </div>
                    </a>
<?php
                  		
                  		$sql = "SELECT * FROM `Trusted` WHERE `User_ID`=".$id;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo'
                  		';
                        
                  		
                  		
    $i=0;
    $TrustImages = [];
    $TrustID=[];
    $TrustName=[];
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
       
       echo '<div class="col-md-4 upjump">
        <h3 style="text-align: right; font-size:20px; "><span class="glyphicon glyphicon-trash" id="pers1'.$row["TrustPerson_ID"].'" data-toggle="modal" data-target="#confirm-delete-pers"></span></h3>
        <center>
       <img id="trust1'.$row["TrustPerson_ID"].'" class="blurimg" src="https://dordevoi.ro/SignUp/uploads/'.$row["TrustPerson_ID"].'.jpg" style=" height: 300px;"></center>
                  				<center><h2>'.$row["Name"].'</h2></center>
                  			
                  		</div>
                  		<script>
                  		$("#pers1'.$row["TrustPerson_ID"].'").click(function() {
        $("#persname").val("'.$row["TrustPerson_ID"].'");});
                       $("#trust1'.$row["TrustPerson_ID"].'").click(function() {
         $("#trustname").val("'.$row["Name"].'");
         $("#trusttel").val("'.$row["Phone"].'");                  
         $("#trustid").val("'.$row["TrustPerson_ID"].'"); 
         $("#trustadress").val("'.$row["Adress"].'"); 
         $("#trustemail").val("'.$row["Email"].'"); 
         $("#TrustModal").modal("toggle");
                       });
                  		
                  		</script>
                  		
                  		' ;
                  		
                  		$TrustID[$i]=$row["TrustPerson_ID"];
             $TrustName[$i]=$row["Name"];
                 $i++;
                    
                
    }}
    // 
    else echo '<a href="https://dordevoi.ro/SignUp/AddTrust.php">
						<div class="addtrust col-md-4 col-lg-offset-4">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%;filter:invert(100%);"></center>
				   	  		<center><h3>Persoana noua de incredere</h3></center>
				   	    </div>
                    </a>';
                     
                  		
                  		?>
                  		<h1><br></h1>
                  		
                  		<div id="TrustModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Schimba datele unei persoane de incredere</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="https://www.dordevoi.ro/TrustPerson/Update.php"> 
        <h1>Nume:</h1>
           <input type="text" name="nume" id="trustname" class="form-control" placeholder="Nume">
           <h1>Email</h1>
           <input type="email" name="email" id="trustemail" class="form-control" placeholder="Email">
           <h1>Telefon</h1>
           <input type="text" name="tel" id="trusttel" class="form-control" placeholder="Telefon">
           <h1>Adresa</h1>
           <input type="text" name="adresa" id="trustadress" class="form-control" placeholder="Adresa">
           <input type="text" id="trustid" name="ID" style="display:none">
           <center><input type="submit" class="btn btn-success" value="modifica"></center>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                  		
                  			<form style="display:none" id="persform" method="Post" action="https://dordevoi.ro/TrustPerson/DeleteTrust.php">
                  		    <input type="text" name="id" id="persname">
                  		    <div class="form-group">
                              <input type="password" name="" class="form-control" >
                            </div>
                  		</form>
                  		          <div class="modal fade" id="confirm-delete-pers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Stergeti Persoana de incredere?</h4>
                </div>
            
                <div class="modal-body">
                    <p>Sunteti pe cale sa stergeti o Persoana de incredere, sunteti sigur ca doriti sa faceti acest lucru ? Actiunea este ireversibila</p>
                    
                   
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button id="delbtn-pers" onclick='$("#persform").submit();' class="btn btn-danger btn-ok">Sterge</button>
                </div>
            </div>
        </div>
    </div>
                  		
                  		
                  		
                  		
                  		<!-- Modal -->

                  		
                  		<!--
                  		  <a href="https://dordevoi.ro/SignUp/AddTrust.php">
						<div class="addtrust col-md-4 ">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%;"></center>
				   	  		<center><h3>Persoana noua de incredere</h3></center>
				   	    </div>
                    </a>
                        -->
                        
                  		</div>
                  		
                  				<div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                 
                               	<button style="width:100%;" type="button" class="btn btn-default btn-lg" onclick="$('#DesprePers').collapse('toggle');">Mai multe detalii despre Persoanele de increde</button>
                              </h4>
                            </div>
                            <div id="DesprePers" class="panel-collapse collapse">
                              <div class="panel-body">
                              
                                <center><h1>Detalii despre Persoanele de incredere</h1></center>
                  		    <p>Persoanele de incredere sunt oameni apropiati dumneavoastra, ce sunt responsbili de comunicarea datei mortii dumneavoastra catre noi. Astfel, noi ne putem asigura ca toate mesajele dumneavoastra vor ajunge la destinatar chiar si dupa trecerea dumneavoastra in nefiinta. <br> Persoanele de incredere pot fi responsabile de urmatoarele lucruri:</p>
                  		    <ol>
                  		        <li><p><b> Comunicarea catre noi a datei decesului dumneavoastra </b> Daca nu veti mai plati taxa lunara timp de 2 luni, noi vom incepe sa contactam persoanele dumneavoastra de incredere, astfel nu vom lua decizii pripite legate de data decesului.</p></li>
                  		        <li><p><b>Transmiterea de mesaje Fizice:</b> Puteti trimite un mesaj fizic prin intermediul unei persoane de incredere, astfel incat veti fi sigur ca mesajul va ajunge la destinatar, chiar daca acesta isi va schimba domiciliul intre timp. </p></li>
                  		        <li><p><b>Transmiterea de mesaje Virtuale</b> Aceste mesaje vor fi livrate destinatarului de catre una dintre persoanele dumneavoastra de incredere. Noi vom notifica persoana respectiva atunci cand dumneavoastra compuneti mesajul, si in ziua livrarii. Astfel, puteti fi sigur ca rudele dumneavoastra nu vor uita niciodata sa livreze mesajul.</p></li>
                  		    </ol>
                              
                              </div>
                              <div class="panel-footer">  </div>
                            </div>
                          </div>
                        </div>
                  		<h1><br></h1>
                  		 
                  			<div class="row futuristic-bg" style="background-color:#444c57;">
                  		<center><h1>Mesajele mele directe</h1></center>
                  		
                  		
                  		   <a href="https://dordevoi.ro/Direct/AddSafe.php">
						<div class="safe1 col-lg-4 ">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%; filter:invert(100%);"></center>
				   	  		<center><h3>Adauga un mesaj direct</h3></center>
				   	    </div>
                    </a>
      
    
     <form id="deldirectform1" method="POST" style="display:none" action="https://dordevoi.ro//Direct/delete.php">
        <input type="text" name="DelID" id="deletedirectid1">
    </form>
                  		
             		                         <?php
                    
                       	 $sql = "SELECT * FROM `Direct` WHERE User_ID =" .$id;
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    
   
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo ' <a><div class="safe1 col-lg-4" >
               <!--  --><h3 style="text-align: right; font-size:20px; "><span class="glyphicon glyphicon-trash" id="directdelete1'.$row["ID"].'" data-toggle="modal" data-target="#confirm-delete-direct"></span></h3>
               <div id="directcard12'.$row["ID"].'">
   	  		<center><img  src="https://dordevoi.ro/Direct/uploads/'.$row["ID"].'.jpg" height="275px" id="deletecardimage'.$row["ID"].'" onerror="altcard13'.$row["ID"].'()" style="max-width: 100%;
    max-height: 90%;"  ></center>
   	  		<center><h3>'.$row["Name"].'</h3></center>
   	  		</div>
   	  	</div></a>
   	  	<script> $("#directcard12'.$row["ID"].'").click(function() {
        $("#directname").val("'.$row["ID"].'");
        $("#directform1").submit();
});
      $("#directdelete1'.$row["ID"].'").click(function() {
      
      $("#deletedirectid1").val("'.$row["ID"].'")
       /* var r = confirm("Sunteti sigur ca doriti sa stergeti un mesaj direct ?");
    if (r == true) {
        txt = "You pressed OK!";
     
   
        
        $("#deldirectform1").submit();  }  
         */
          
      }); 

        function altcard13'.$row["ID"].'() {
    document.getElementById("deletecardimage'.$row["ID"].'").src = "https://dordevoi.ro/MyProfile/logo.png";
}


</script>';
    }
} else {
   /* echo '<div class="row" > <a href="https://dordevoi.ro/Direct/AddSafe.php">
						<div class="safe1 col-lg-4 col-lg-offset-4">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%; filter:invert(100%);"></center>
				   	  		<center><h3>Adauga un mesaj direct</h3></center>
				   	    </div>
                    </a>
                    </div>';*/}
                    
                    
                    
                    /*
                        $sql = 'SELECT * FROM `Direct` WHERE DeliveryType = "Virtual" AND User_ID = '.$id;
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '<tr>
                        <td><button class="btn btn-warning">Modifica</button></td>
                        <td>'.$row["Email"].'</td>
                        <td>'.$row["Email"].'</td>
                        <td>'.$row["Phone"].'</td>
                        <td style="text-overflow:elypsis">'.$row["Message"].'</td>
                        <td>'.$row["Date_Available"].'</td>
                      </tr>';
                                
                               /* echo '<div class="col-md-6">
                <div class="image-flip" ontouchstart="this.classList.toggle("hover");">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center" style="text-overflow: ellipsis; ">
                                    <h1 class="card-title">'.$row["Message"].'</h1>
                                    <h1 class="card-text">'.$row["Email"].'</h1>
                                    <h1 class="card-text">'.$row["Phone"].'</h1>
                                    <h1 class="card-text">'.$row["Date_Available"].'</h1>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    
                                    <p class="card-text">De aici puteti modifica data de livrare a mesajului, sau il puteti anula</p>
                                    <form>
                                        <center>
                                        <div style="width:80%">
                                        <input class="form-control" value="'.$row["Date_Available"].'" type="date">
                                        <input class="form-control" type="email" value="'.$row["Email"].'">
                                        <input class="form-control" type="text" value="'.$row["Phone"].'">
                                        </div></center>
                                    </form>
                                    <h4 class="card-title"> </h4>
                                    <button class="btn btn-success">Modifica</button>
                                    <button class="btn btn-danger">Sterge</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>'; 
                                
                            }
                        } else {
                            echo "Inca nu aveti mesaje";
                        }
                        */
                    ?>
                  		</div>
                  		
                  	
                

                 
			
			<h1><br></h1>

		
		<div class="row futuristic-bg" style="background-color:#444c57;">
                  		<center><h1>Mesajele mele prin persoane de incredere</h1></center>
                  		
                  		
                  		   <a data-toggle="modal" data-target="#myModal3">
						<div class="safe1 col-lg-4">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%; filter:invert(100%);"></center>
				   	  		<center><h3>Adauga un mesaj nou prin intermediul unei persoane de incredere</h3></center>
				   	    </div>
                    </a>
                    
                  		                         <?php
                    
                       	 $sql = "SELECT *,Gifts.Adress as RecieverAdress FROM `Gifts` INNER JOIN Trusted ON Gifts.ResponsibleID = Trusted.TrustPerson_ID WHERE Gifts.UserID  =" .$id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo ' <a><div class="safe1 col-lg-4" >
                <h3 style="text-align: right; font-size:20px; "><span class="glyphicon glyphicon-trash" id="deleteGift'.$row["GiftID"].'" ></span></h3> 
               <div id="directcard121'.$row["GiftID"].'">
   	  		<center><h3>'.$row["Reciever"].'</h3>
   	  		        <h3>'.$row["RecieverAdress"].'</h3>
   	  		        <h3>'.$row["Comment"].'</h3>
   	  		        <h3> Responsabil:'.$row["Name"].'</h3>
   	  		        <img src="https://dordevoi.ro/SignUp/uploads/'.$row["TrustPerson_ID"].'.jpg" style="max-height:150px;">
   	  		</center>
   	  		</div>
   	  	</div></a>
   	  	<script> $("#directcard121'.$row["GiftID"].'").click(function() {
        
});
      $("#deleteGift'.$row["GiftID"].'").click(function() {
      if (confirm("Sunteti sigur ca doriti sa stergeti acest mesaj ?"))
      {
        $("#delGiftid").val("'.$row["GiftID"].'");
        $("#delGiftForm").submit();
        setTimeout(function(){  location.reload("true"); }, 1000);
          
      }
          
          
      }
        
        ); 

  


</script>



';
    }
} else {
    echo "0 results";}
                    
                    ?>
                  		</div>
		
		
		<form id="delGiftForm" method="POST" action="https://www.dordevoi.ro/Gifts/delete.php" target="hiddenframe1" style="display:none">
		    

    <input type="text" name="Gift_ID" id="delGiftid" >

</form>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b598f62e21878736ba25302/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<iframe style="display:none" name="hiddenframe1">
    
</iframe>
		
			          
          <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="width:100%;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div  class="modal-header futuristic-bg">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Mesajele mele securizate</h4>
        </div>
        <div class="modal-body futuristic-bg" style="padding:0px;">
              <a href="https://dordevoi.ro/Safe/AddSafe.php">
						<div class="safe1 col-lg-4 ">
				   	  		<center><img  src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%; filter:invert(100%);"></center>
				   	  		<center><h3>Adauga un mesaj securizat</h3></center>
				   	    </div>
                    </a>
          <?php
                      
            $result = $conn->query($sql);
            
  
                    
                    
   	  	
 	  	
   	 $sql = "SELECT * FROM `Safes` WHERE Owner_ID =" .$id;
$result = $conn->query($sql);
//echo $result->num_rows;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo ' <a><div class="safe1 col-lg-4 " >
                <h3 style="text-align: right; font-size:20px; "><span class="glyphicon glyphicon-trash" id="delete12'.$row["SafeID"].'" data-toggle="modal" data-target="#confirm-delete"></span></h3>
               <div id="card12'.$row["SafeID"].'">
   	  		<center><img  src="https://dordevoi.ro/Safe/uploads/'.$row["SafeID"].'.jpg" id="image1'.$row["SafeID"].'" height="275px" onerror="alt1'.$row["SafeID"].'()" style="max-width: 100%;
    max-height: 90%;"  ></center>
   	  		<center><h3>'.$row["Reciever"].'</h3></center>
   	  		</div>
   	  	</div></a>
   	  	<script> $("#card12'.$row["SafeID"].'").click(function() {
        $("#safename").val("'.$row["SafeID"].'");
        $("#form1").submit();
});
      $("#delete12'.$row["SafeID"].'").click(function() {
        $("#delid").val("'.$row["SafeID"].'")});

function alt1'.$row["SafeID"].'() {
    document.getElementById("image1'.$row["SafeID"].'").src = "https://dordevoi.ro/MyProfile/logo.png"
}

</script>';
    }
} else {
    echo "0 results";}
   	  	
   	
                   	  	
               	  	
          
          ?>
          
          
          
          
    <form style="display:none;" id="delform" method="Post" action="https://dordevoi.ro/Safe/delete.php">
    <input type="text" name="DelID" id="delid">
</form>
   
        </div> 
        
        <div class="modal-footer futuristic-bg">
             <div class="col-md-12">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Inchide Fereastra</button></div>
        </div>
      </div>
      
      
    </div>
  </div>
  </div>
  
  
     
            <div class="modal fade" id="confirm-delete-direct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Stergeti mesajul direct ?</h4>
                </div>
            
                <div class="modal-body">
                    <p>Sunteti pe cale sa stergeti un mesaj direct, doriti sa continuati ?</p>
                    
                   
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button id="delbtndirect" class="btn btn-danger btn-ok">Sterge</button>
                </div>
                <script>
                    $("#delbtndirect").click(function(){
                        $("#deldirectform1").submit();
                    });
                </script>
            </div>
        </div>
    </div>
           
            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body">
                    <p>Sunteti pe cale sa stergeti un mesaj securizat, doriti sa continuati ?</p>
                    
                   
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button id="delbtn" class="btn btn-danger btn-ok">Sterge</button>
                </div>
            </div>
        </div>
    </div>

  

    <script>
     /*   $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'))});*/
            
        $("#delbtn").click( function(){ document.getElementById("delform").submit();} );    
            
       
         
    </script>


					</div><!-- /row -->
					
			<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg" style="width:80%;">
    
      <!-- Modal content-->
      <div class="modal-content futuristic-bg">
        <div class="modal-header futuristic-bg" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Mesaj Direct</h4>
        </div
        <div class="modal-body futuristic-bg">
            <a href="https://dordevoi.ro/Direct/AddSafe.php">
						<div class="safe1 col-lg-4 ">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="max-height: 275px; max-width: 80%; filter:invert(100%);"></center>
				   	  		<center><h3>Adauga un mesaj securizat</h3></center>
				   	    </div>
                    </a>
                    <br>
                    <?php
                    
                       	 $sql = "SELECT * FROM `Direct` WHERE User_ID =" .$id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo ' <a><div class="safe1 col-lg-4" >
               <!-- <h3 style="text-align: right; font-size:20px; "><span class="glyphicon glyphicon-trash" id="directdelete1'.$row["ID"].'" data-toggle="modal" data-target="#confirm-delete"></span></h3> -->
               <div id="directcard21'.$row["ID"].'">
   	  		<center><img  src="https://dordevoi.ro/Direct/uploads/'.$row["ID"].'.jpg" height="275px" id="directcardimage'.$row["ID"].'" onerror="altcard'.$row["ID"].'()" style="max-width: 100%;
    max-height: 90%;"  ></center>
   	  		<center><h3>'.$row["Name"].'</h3></center>
   	  		</div>
   	  	</div></a>
   	  	<script> $("#directcard21'.$row["ID"].'").click(function() {

        $("#directname").val("'.$row["ID"].'");
        $("#directform1").submit();
});
    

        function altcard'.$row["ID"].'() {
    document.getElementById("directcardimage'.$row["ID"].'").src = "https://dordevoi.ro/MyProfile/logo.png";
}


</script>';
    }
} else {
    echo "0 results";}
    ?>
   
    
         <br>
            <div class="modal-footer futuristic-bg" style="border-top:0px solid white;">
                <div class="col-lg-12">
          <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button></div>
        </div>       
        </div>
         </div>
        
      </div>
      
    </div>

    <form id="directform1" method="POST" style="display:none" action="https://dordevoi.ro/Direct/EditSafe.php">
        <input type="text" name="SafeID" id="directname">
    </form>

<!-- Modal -->
<div id="myModalCadou" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content futuristic-bg">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Trimite un cadou</h4>
      </div>
      <div class="modal-body">
        
         <form>
        <div class="form-group">
                 <h1>Nume & Prenume</h1>
                 <input type="text" class="form-control" >
        </div>
         <div class="form-group">
                 <h1>Adresa</h1>
                 <input type="text" class="form-control" >
        </div>
        <div class="form-group">
                 <h1>Telefon</h1>
                 <input type="text" class="form-control" >
        </div>
        <div class="form-group">
                 <h1>Scrieti un mesaj ce va insoti cadoul</h1>
                 <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <div class="form-group">
            <h1>Data la care doriti sa fie livrat cadoul</h1>
                 <center><input type="date"></center>
        </div
        <div class="form-group">
                 <center><!--<input type="submit" class="btn btn-success">-->
                 <a  href="https://tawk.to/chat/5b598f62e21878736ba25302/default" target="_blank" ><button type="button"  class="btn btn-default btn-lg"  data-toggle="popover" data-placement="bottom" title="Atentie! " data-content="Veti fi contactat pentru mai multe detalii despre cadou" data-trigger="hover">Obiect personal</button></a>
                 <button type="button" class="btn btn-default btn-lg" >Alege din magazin</button></center>
        </div>
        <div>
            <i>" Toate cadourile cu o data de livrare care depaseste 3 zile vor fi stocate de catre dordevoi.ro  in depozitele noastre securizate si se va percepe o taxa lunara de 3 dolari suplimentara pana la data specificata de dumneavoastra"
</i>
        </div>
      </form>
        <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    
    
    <!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="width:80%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header"  style="background-color:#424a5d;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mesaj prin intermediul unei persoane de incredere</h4>
      </div>
      <div class="modal-body futuristic-bg">
          
          <div>
              <form id="giftpost" method="POST" action="https://dordevoi.ro/Gifts/SendGift.php" target="_Blank"  enctype="multipart/form-data">
                   <center><h1>Va rugam sa selectati persoana de incredere prin care doriti sa transmiteti mesajul destinatarului </h1></center>
          <div class="row">
              <center>
                  <a href="https://dordevoi.ro/SignUp/AddTrust.php">
						<div class="addtrust card col-md-4 " style="background-color:#d2d5db; height:500px;">
				   	  		<center><img src="https://png.icons8.com/ios/1600/add.png" style="height: 275px; max-width: 80%;"></center>
				   	  		<center><h3>Persoana noua de incredere</h3></center>
				   	    </div>
                    </a>
          <?php
         
          for($j=0;$j<$i;$j++)
          {
              echo ' <div class="card col-lg-4 persincredere" id="'.$j.'" style="height:500px ;background-color:#d2d5db"">
    <img class="card-img-top" src="https://dordevoi.ro/SignUp/uploads/'.$TrustID[$j].'.jpg" alt="Card image" style="width:100%;height:300px">
    <div class="card-body">
      <h1 class="card-title">'.$TrustName[$j].'</h1>
      <p class="card-text"></p>
      <a onclick="sendtrust('.$TrustID[$j].', '.$j.')" class="btn btn-primary">Select</a>
    </div>
  </div>';
          }
          
          ?></center></div>
          <center><h1>Va rugam sa completati pentru cine este mesajul pe care intentionati sa il trimiteti prin persoana de legatura</h1></center>
          <div class="form-group">
              <h1>Nume</h1>
               <input type="text" class="form-control" id="usr" name="Name" required>
          </div>
          <div class="form-group">
              <h1>Adresa</h1>
             <input type="text" class="form-control" name="Adress" required>
          </div>
          
          <center><h1>Va rugam sa transmiteti persoanei de incredere instructiunile si ce trebuie sa faca cu mesajul/cadoul /obiectul respectiv</h1></center>
          <div class="form-group">
              <h1></h1>
             <textarea class="form-control" rows="5" name="comment"></textarea>
          </div>
          <center><h1>*Optional: Atasati un fisier (imagine/video/audio/document Office)</h1></center>
          <div class="row">
          <div class="col-md-8 col-md-offset-2">
    <h3> </h3>

	<!-- COMPONENT START -->
	<div class="form-group">
		<div class="input-group input-file" name="fileToUpload">
			<span class="input-group-btn">
        		<button class="btn btn-default btn-choose" type="button">Alegeti</button>
    		</span>
    		<input type="text" class="form-control" placeholder='Alegeti un fisier...' />
    		<span class="input-group-btn">
       			 <button class="btn btn-warning btn-reset" type="button">Reset</button>
    		</span>
		</div>
	</div>
	<!-- COMPONENT END -->

	<script>
	    function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});
	</script>
	</div>
</div>
          
          
          
          
          <input type="text" name="responsibleID" style="display:none" id="responsibleID">
         <input type="text" name="UserID" style="display:none" value=<?php echo '"'.$id.'"'; ?> >
         <h1>If you want to send the message at a specific time, only select the Date, else only select the delivery period</h1>
          <div class="form-group col-lg-6">
              <p>Delivery Date during your life </p>
             <input type="date" class="form-control" name="date">
          </div>
          <div class="form-group col-lg-6">
            <p>Or Select time period after your death:</p>
            <select class="form-control" id="sel1" name="period">
                     <option>-</option>
                     <option>3 months after my death</option>
                     <option>6 months after my death</option>
                     <option>9 months after my death</option>
                     <option>1 year after my death</option>
                     <option>2 years after my death</option>
                     <option>5 years after my death</option>
            </select>
        </div></center>
       
          <center><input type="submit" class="btn btn-success btn-lg" style="display:none" id="submitButton"></center>
      </form>
      
     
       <form id="trustform" method="POST" action="https://dordevoi.ro/TrustPerson/TrustSafe.php">
       <input type="text" id="trustname" name="TrustID">
   </form>
   
   <script>
      function sendtrust(y,el)
      {
          var x = document.getElementsByClassName("persincredere");
            for(var i=0;i<x.length;i++)
              {
                x[i].style.backgroundColor ='#d2d5db';
              }
          var myId = '#' + el;
          $(myId).css( "background-color", "#00A591" );
          document.getElementById("responsibleID").value=y;
          document.getElementById("submitButton").style.display="block";
        
      };
   </script>
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content futuristic-bg">
        <div class="modal-header"  style="background-color:#424a5d;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Mesaj Public</h4>
        </div>
        <div class="modal-body">
          <ul  class="nav nav-pills nav-justified">
                <li ><a data-toggle="pill" href="#public1">Facebook</a></li>
                <li ><a data-toggle="pill" href="#public2">Youtube</a></li>
                
              </ul>
              <div class="tab-content">
    <div id="public1" class="tab-pane fade in ">
        <table style="width:100%;">
            <tr style="width:100%;">
                <td style="width:65%;">
                  <h1>Scrieti un mesaj text ce va fi postat pe Contul Nostru de Facebook, pentru a fi sigur ca opinia dumneavoastra va ramane publica in eternitate</h1>
      <form action="https://dordevoi.ro/fbpost.php" method="POST">
          <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea class="form-control" rows="5" name="mesaj"></textarea>
           </div>
           <input type="text" style="display:none" value="<?php echo $name; ?>" name="nume">
           <center><input type="submit" class="btn btn-success"></center>
      </form>  
                </td>
                <td style="width:10%;"></td>
                <td style="width:25%;">
                    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&autoLogAppEvents=1&version=v3.0&appId=215838192312318';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/pg/Dor-De-Voi-335492530303324" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pg/Dor-De-Voi-335492530303324" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pg/Dor-De-Voi-335492530303324">Dor De Voi</a></blockquote></div>
                </td>
            </tr>
        </table>
        
      <div id="fb-root"></div>

      
      
    </div>
    <div id="public2" class="tab-pane fade">
        <h1>Alegeti un fisier Video, ce va fi postat pe Contul Nostru de Youtube dupa ce nu veti mai fi printre noi </h1>
      <form>
          
          <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                            
                            <span class="input-group-btn">
                                <!-- image-preview-clear button -->
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                </button>
                                <!-- image-preview-input -->
                                <div class="btn btn-default image-preview-input">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <span class="image-preview-input-title">Browse</span>
                                    <input type="file" accept=".png, .jpeg, .jpg, .gif, .mp4, .mp3, .wav , .doc, .docx, .ppt, .xls, .pdf " name="fileToUpload" required/> <!-- rename it -->
                                </div>
                            </span>
                        </div><!-- /input-group image-preview [TO HERE]--> 
                        <script>
                            $(document).on('click', '#close-preview', function(){ 
                $('.image-preview').popover('hide');
                // Hover befor close the preview
                $('.image-preview').hover(
                    function () {
                       $('.image-preview').popover('show');
                    }, 
                     function () {
                       $('.image-preview').popover('hide');
                    }
                );    
            });
            
            $(function() {
                // Create the close button
                var closebtn = $('<button/>', {
                    type:"button",
                    text: 'x',
                    id: 'close-preview',
                    style: 'font-size: initial;',
                });
                closebtn.attr("class","close pull-right");
                // Set the popover default content
                $('.image-preview').popover({
                    trigger:'manual',
                    html:true,
                    title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
                    content: "There's no image",
                    placement:'bottom'
                });
                // Clear event
                $('.image-preview-clear').click(function(){
                    $('.image-preview').attr("data-content","").popover('hide');
                    $('.image-preview-filename').val("");
                    $('.image-preview-clear').hide();
                    $('.image-preview-input input:file').val("");
                    $(".image-preview-input-title").text("Browse"); 
                }); 
                // Create the preview image
                $(".image-preview-input input:file").change(function (){     
                    var img = $('<img/>', {
                        id: 'dynamic',
                        width:250,
                        height:200
                    });      
                    var file = this.files[0];
                    var reader = new FileReader();
                    // Set preview image into the popover data-content
                    reader.onload = function (e) {
                        $(".image-preview-input-title").text("Change");
                        $(".image-preview-clear").show();
                        $(".image-preview-filename").val(file.name);            
                        img.attr('src', e.target.result);
                        $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
                    }        
                    reader.readAsDataURL(file);
                });  
            });
                        </script>
          
      </form>
    </div>
    
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
  </div>
					
                 
                  
                  
           
                  
              
              </div>
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="background-color: #424a5d">
          <div class="text-center" style="background-color: #424a5d">
              2018 - Dor De Voi
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	
	
   <form id="form1" action="https://dordevoi.ro/Safe/EditSafe.php" method="POST">
       <input type="text" id="safename" name="SafeID">
   </form>

  </body>
</html>
