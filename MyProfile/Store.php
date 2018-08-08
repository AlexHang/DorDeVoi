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

$sql = "SELECT * FROM `Users` WHERE User_ID = ".$_SESSION["ID"];

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

    

    $username=$row["UserName"];

    $name=$row["Name"];

    $image=$row["ImageURL"];

    }

} else {

    echo "Wrong Password";

}

$id = $_SESSION["ID"];

?>





<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="Dashboard">

    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">



    <title>Magazin</title>



    <!-- Bootstrap core CSS -->

    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!--external css-->

    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

         <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- Custom styles for this template -->

    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/style-responsive.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->




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



  <body class="futuristic-bg">



  <section id="container" >

      <!-- **********************************************************************************************************************************************************

      TOP BAR CONTENT & NOTIFICATIONS

      *********************************************************************************************************************************************************** -->

      <!--header start-->

      <header style="background-color: #424a5d;" class="header black-bg">

              

            <!--logo start-->

            <a href="index.html" class="logo"><b>Dor De Voi</b></a>

            <!--logo end-->

            <div class="nav notify-row" id="top_menu">

                <!--  notification start -->

             

                <!--  notification end -->

            </div>

            

        </header>

      <!--header end-->

      

      <!-- **********************************************************************************************************************************************************

      MAIN SIDEBAR MENU

      *********************************************************************************************************************************************************** -->

      <!--sidebar start-->

      <aside>

         <div id="sidebar" style="background: #424a5d; "  class="nav-collapse">
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

      

      <!-- **********************************************************************************************************************************************************

      MAIN CONTENT

      *********************************************************************************************************************************************************** -->

      <!--main content start-->

      <section id="main-content">

          <section class="wrapper site-min-height">
            
            
            <div class="row">
                <h1><br></h1><h1><br></h1>
                      <center><h1>Alegeti un cadou de mai jos</h1></center>

					<!--	<div class="col-lg-4 " style="background-color:#444c57; ">
                      		
                      		
			                        <iframe style="border:5px solid lightgrey; border-radius:25px; " width="100%" height="345 px" src="https://dordevoi.ro/Safe/size.php">
			                            
			                        </iframe>
								

                      		
						</div> /col-md-4 -->
						
						
						
                    <a>
						<div class="safe1 col-lg-4 ">
						    <h3><br></h3>
				   	  		<center><img src="https://fyf.tac-cdn.net/images/products/large/BF116-11KM.jpg" style="max-height: 275px; max-width: 80%;"></center>
				   	  		<center><h3>Buchet de flori</h3></center>
				   	    </div>
                    </a>
                    
                    
 <a><div class="safe1 col-lg-4 ">
     <h3><br></h3>
   	  		<center><img src="https://bnsec.bluenile.com/bluenile/is/image/bluenile/-18k-yellow-gold-wedding-ring-/18_main?$v2_phab_detailmain_lrg$"  height="275px" onerror="alt78()" style="max-width: 100%;
    max-height: 90%;"></center>
   	  		<center><h3>Inel inscriptionat</h3></center>
   	  	</div></a>
   	  	
   	  	
   	  	
   	  	 <a>
   	  	     <div class="safe1 col-lg-4 ">
                  <h3><br></h3>
               
   	  		<center><img src="https://css.brilliantearth.com/static/img/gateway/jewelry/ir234/necklaces.jpg" height="275px"  style="max-width: 100%;
    max-height: 90%;"></center>
   	  		<center><h3>Colier inscriptionat</h3></center>
   	  	</div></a>
   	  	
   	  	
   	  		 <a>
   	  	     <div class="safe1 col-lg-4 ">
                  <h3><br></h3>
               
   	  		<center><img src="https://auroraboreala.files.wordpress.com/2013/02/sam_7490-1024x768.jpg" height="275px"  style="max-width: 100%;
    max-height: 90%;"></center>
   	  		<center><h3>Felicitare/Carte Postala</h3></center>
   	  	</div></a>
   	  	
   	  	
   	  		 <a>
   	  	     <div class="safe1 col-lg-4 ">
                  <h3><br></h3>
               
   	  		<center><img src="http://www.eyekonphoto.com/wp-content/uploads/2012/10/photo-album.jpg" height="275px"  style="max-width: 100%;
    max-height: 90%;"></center>
   	  		<center><h3>Album Foto</h3></center>
   	  	</div></a>
   	  	
   	  	
   	  		 <a>
   	  	     <div class="safe1 col-lg-4 ">
                  <h3><br></h3>
               
   	  		<center><img src="https://www.buildabear.com/dw/image/v2/BBNG_PRD/on/demandware.static/-/Sites-buildabear-master/default/dw02c1fb63/23342x.jpg?sw=600&sh=600&sm=fit" height="275px"  style="max-width: 100%;
    max-height: 90%;"></center>
   	  		<center><h3>Jucarie/Obiect din plus</h3></center>
   	  	</div></a>
   	  	
   	  	
   	  	
   	  	
   	  	<h1><br></h1>
			</div>
            
            
            
            
            
            <div style="width:100%; height:100px;"></div>
            
            <ul class="nav nav-tabs nav-justified">
  <li class="active"><a data-toggle="tab" href="#home"><h3>Categoria 1</h3></a></li>
  <li><a data-toggle="tab" href="#menu1"><h3>Categoria 2</h3></a></li>
  <li><a data-toggle="tab" href="#menu2"><h3>Categoria 3</h3></a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
        <div class="row">
            <a href="https://dordevoi.ro/MyProfile/product.php">
    <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="https://images.pexels.com/photos/196664/pexels-photo-196664.jpeg?auto=compress&cs=tinysrgb&h=350" style="width:500px; height:400px;" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		</a>
  		<a href="https://dordevoi.ro/MyProfile/product.php">
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      				<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/F-35A_flight_%28cropped%29.jpg/1200px-F-35A_flight_%28cropped%29.jpg" style="width:500px; height:400px;" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		</a>
  		<a href="https://dordevoi.ro/MyProfile/product.php">
  		 <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="https://images.pexels.com/photos/196664/pexels-photo-196664.jpeg?auto=compress&cs=tinysrgb&h=350" style="width:500px; height:400px;" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		</a>
  		<a href="https://dordevoi.ro/MyProfile/product.php">
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      				<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/F-35A_flight_%28cropped%29.jpg/1200px-F-35A_flight_%28cropped%29.jpg" style="width:500px; height:400px;" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		</a>
  		<a href="https://dordevoi.ro/MyProfile/product.php">
  		 <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="https://images.pexels.com/photos/196664/pexels-photo-196664.jpeg?auto=compress&cs=tinysrgb&h=350" style="width:500px; height:400px;" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		</a>
  		<a href="https://dordevoi.ro/MyProfile/product.php">
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      				<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/F-35A_flight_%28cropped%29.jpg/1200px-F-35A_flight_%28cropped%29.jpg" style="width:500px; height:400px;" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		</a>
  		
  		</div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="row">
        <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      				<img src="http://nationalinterest.org/files/styles/main_image_on_posts/public/main_images/uss_new_jersey_6219214852_1.jpg?itok=fcxYuFih" style="width:500px; height:400px;" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
    </div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <div class="row">
    <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="https://yt3.ggpht.com/a-/AJLlDp0Z8RKOktBaSzTGjgzPujPo3HMIokLBdMhNww=s900-mo-c-c0xffffffff-rj-k-no" style="width:500px; height:400px;" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      				<img src="https://www.japantimes.co.jp/wp-content/uploads/2017/10/f-flattops-a-20171029-870x580.jpg" style="width:500px; height:400px;" alt="...">
      			<h4>Product Tittle</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">$29,90</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > BUY ITEM</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		</div>
  </div>
</div>
            
            
         

      </section><!-- /MAIN CONTENT -->



      <!--main content end-->

      <!--footer start

      <footer class="site-footer">

          <div class="text-center">

              2014 - Alvarez.is

              <a href="blank.html#" class="go-top">

                  <i class="fa fa-angle-up"></i>

              </a>

          </div>

      </footer>-->

      <!--footer end-->

  </section>



    <!-- js placed at the end of the document so the pages load faster -->

    <script src="assets/js/jquery.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>

    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>

    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>





    <!--common script for all pages-->

    <script src="assets/js/common-scripts.js"></script>



    <!--script for this page-->

    

  <script>

      //custom select box



      $(function(){

          $('select.styled').customSelect();

      });



  </script>



  </body>

</html>

