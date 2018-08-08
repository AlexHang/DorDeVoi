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

  html,body{

    background-color: #b7b9bc;

  }

  

  .container{

    margin-top:20px;

}

h4{
    	font-weight: 600;
	}
	p{
		font-size: 12px;
		margin-top: 5px;
	}
	.price{
		font-size: 30px;
    	margin: 0 auto;
    	color: #333;
	}
	.right{
		float:right;
		border-bottom: 2px solid #4B8E4B;
	}
	.thumbnail{
	
		-webkit-transition: all 0.5s; 
		transition: all 0.5s;
	}
	.thumbnail:hover{
		filter:sepia(100%);
		box-shadow: 0px 0px 10px #4bc6ff;
	}
	.line{
		margin-bottom: 5px;
	}
	@media screen and (max-width: 770px) {
		.right{
			float:left;
			width: 100%;
		}
	}

</style>











    

  </head>



  <body>



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

         <div id="sidebar" style="margin-top:100px; background: #424a5d; "  class="nav-collapse">
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
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <center><h1>Nume Produs</h1></center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <center>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                  </ol>
                                
                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner">
                                    <div class="item active">
                                      <img src="https://www.airforce-technology.com/wp-content/uploads/sites/4/2017/12/saab-gripen.jpg" style="height:400px;" alt="Los Angeles">
                                    </div>
                                
                                    <div class="item">
                                      <img src="http://a57.foxnews.com/images.foxnews.com/content/fox-news/us/2017/12/14/us-fighter-jets-head-butt-russian-jets-in-syria-us-official-says/_jcr_content/par/featured_image/media-0.img.jpg/931/524/1513273686497.jpg?ve=1&tl=1&text=big-top-image" style="height:400px;" alt="Chicago">
                                    </div>
                                
                                    <div class="item">
                                      <img src="https://www.maxim.com/.image/t_share/MTM2MzQyNjQ0ODE2MDk0ODM1/f-35-publicjpg.jpg" style="height:400px;" alt="New York">
                                    </div>
                                  </div>
                                
                                  <!-- Left and right controls -->
                                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                            </center>
                        </div>
                        
                        <div class="col-lg-4" style="background-color:white; height:400px;">
                            <center>
                                <h2 style="color:red">Pret:300$</h2>
                                <div class="form-group">
                                      <label for="sel1">Selectati cantitatea:</label>
                                      <select class="form-control" id="sel1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                      </select>
                                    </div>
                                <p>Alegeti Culoarea</p>
                                <div class="radio-inline">
                                  <label><input type="radio" name="optradio">Alb</label>
                                </div>
                                <div class="radio-inline">
                                  <label><input type="radio" name="optradio">Negru</label>
                                </div>
                                <div class="radio-inline">
                                  <label><input type="radio" name="optradio" disabled>Albastru</label>
                                </div>
                                <p>Adresa Livrarii</p>
                                 <div class="input-group">
    <input type="text" class="form-control" placeholder="Adresa">
    
  </div>
                            
                            </center>
                        </div>

         

      </section><!-- /MAIN CONTENT -->



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

