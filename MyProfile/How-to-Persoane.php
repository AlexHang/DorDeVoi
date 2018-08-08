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



    <title>Despre Persoanele de Incredere</title>



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









</style>











    

  </head>



  <body>



  <section id="container" >

      <!-- **********************************************************************************************************************************************************

      TOP BAR CONTENT & NOTIFICATIONS

      *********************************************************************************************************************************************************** -->

      <!--header start-->

     <header style="background-color: #424a5d; height: 100px;" class="header black-bg">
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

          <section class="wrapper site-min-height" style="margin-top:100px;">

          	<h3><i class="fa fa-angle-right"></i> Blank Page</h3>

          	<div class="row mt">

          		<div class="col-lg-12">

          		<p>Place your content here.</p>











    

  <div class="container-fluid col-lg-10">

      <iframe 

      id="Iframe1"

      name="Iframe1"

style="width:500px;

 height: 500px;

 margin:0 auto;

 background:#f7f7f7;

 position:fixed;

 left:50%;

 top:50%;

 margin-left:-250px;

 margin-top:-250px;

 z-index: 5; 

display:none;">

          

      </iframe>

    <div class="row"><div class="col-lg-12" style="height: 100px;"></div></div>

    <div class="row ">

      

     

  </div>

    



      </div>



    </div>





  </div>

 

  





    

		</section><! --/wrapper -->

      </section><!-- /MAIN CONTENT -->



      <!--main content end-->

      <!--footer start-->

      <footer class="site-footer">

          <div class="text-center">

              2014 - Alvarez.is

              <a href="blank.html#" class="go-top">

                  <i class="fa fa-angle-up"></i>

              </a>

          </div>

      </footer>

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

