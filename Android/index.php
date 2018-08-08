<?php
echo $_GET["id"];

?>
 <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css"  media="screen,projection"/>

        <style>
          /*  body{
                background-color:#e6e6e6;
            }*/
         
        </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
        <?php
            
           if(isset($_COOKIE["ID"]) && isset($_COOKIE["Key"]) ) 
            {
                $ID = $_COOKIE["ID"];
                $Key = $_COOKIE["Key"];
                echo '<script>
                    document.getElementById("form1").submit();

                </script>';
            }
            else{
                $ID = "";
                $Key = "";
            }
             if(isset($_COOKIE["User"]) && isset($_COOKIE["Pass"]) ) 
            {
                $user = $_COOKIE["User"];
                $pass = $_COOKIE["Pass"];
                echo '<script>
                    document.getElementById("form1").submit();

                </script>';
            }
             else{
                $user ="";
                $pass="";
            }
           

            
        ?>
         <center><p>Bine ati venit la Dor De Voi</p></center>
        
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Intrati in cont</a></li>
        <li class="tab col s3"><a  href="#test2"><i class="material-icons">lock_open</i>Deschideti Safe</a></li>

      </ul>
    </div>
    <div id="test1" class="col s12">
             <form id="form2" action="#" method="Post">
             <div class="input-field col s12">
                  <input id="user" type="text" value="<?php echo $user; ?>" name="username" class="validate">
                  <label for="user">Email </label>
                  <span class="helper-text">Email-ul pe care l-ati folosit pentru a va crea safe-ul.</span>
                </div>
              
                <div class="input-field col s12">
                  <input id="pass" type="text"  value="<?php echo $pass; ?>" name="password" class="validate">
                  <label for="pass">Parola</label>
                  <span class="helper-text">Parola dumneavoastra</span>
                </div>
                <center>
                 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
               <br>
               <p>sau</p>
                <a href="http://www.dordevoi.ro/Facebook_Android.php"  style="background-color:#4C69BA; " class="waves-effect waves-light btn">LogIn with Facebook</a>
         </center>
               </form>
        </div>
        
    <div id="test2" class="col s12">
            <p>Va rugam sa introduceti ID-ul safe-ului, si cheia de acces, pentru a putea vedea mesajele disponibile pana astazi</p>
                <form id="form1" action="check.php" method="Post">
             <div class="input-field col s6">
                  <input id="id_safe" type="text" value="<?php echo $ID; ?>" name="SafeID" class="validate">
                  <label for="id_safe">ID Safe</label>
                  <span class="helper-text">ID-ul pe care l-ati primit de la proprietarul safe-ului.</span>
                </div>
              
                <div class="input-field col s6">
                  <input id="password" type="text"  value="<?php echo $Key; ?>" name="Key" class="validate">
                  <label for="password">Cheie de Acces</label>
                  <span class="helper-text">Cheia de acces este un cod de 15 caractere pe care l-ati primit de la proprietarul safe-ului.</span>
                </div>
                <input type="text" name="DeviceID" value="<?php
        echo $_GET["id"];
        ?>">
                <center>
                 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
                </center>
                
        
               </form>
               </div>
  </div>
  
       
       
       
       <?php
       if(isset($_COOKIE["ID"]) && isset($_COOKIE["Key"]) ) 
            {
                  /*   echo '<script>
                    document.getElementById("form1").submit();

                </script>';*/
            }
       ?>
    
    
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>
      <script>
            M.AutoInit();

      </script>
    </body>
  </html>