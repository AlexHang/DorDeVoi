<?php

session_start();

$ID = $_SESSION["SignUpID"];

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

  <style>

      

      	body {

    /* The image used */

    background-image: url(https://dordevoi.ro/LogInPage/field.png);
    background-color: #415e8c;
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;

}





input[type=file]{

padding:10px;

background:#2d2d2d;

    width:100%;

}

      

      .card1{

          background-color:#eaebed;

          border:5px solid black;

      }

      

  </style>

  

  <script>

      

       function readURL1(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();



                reader.onload = function (e) {

                    $('#img1')

                        .attr('src', e.target.result);

                };



                reader.readAsDataURL(input.files[0]);

            }

        }

        

      

  </script>

  

</head>

<body>
<nav class="navbar navbar-inverse" style="height:100px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://dordevoi.ro/MyProfile/Profile.php"><b><h1><img src="https://dordevoi.ro/Safe/logo.png" style="height:2em; margin-top:-20px;"></h1></b></a>
    </div>
   
  
  </div>
</nav>
  

<div class="container-fluid">
<h1><br></h1>
<h1><br></h1>
    <form method="Post" action="https://dordevoi.ro/SignUp/Add.php" enctype="multipart/form-data">

        <div class="col-lg-10 col-lg-offset-1 ">

            <center><h1>Adauga o persoana de incredere</h1></center>

            <table style="width:100%;">

            <tr style="width:100%;">

            <td style="width:30%;">

                <center>

               <input required type='file' name="fileToUpload1" onchange="readURL1(this);" />

               <img id="img1" style="width:100%; max-height:300px;" src="https://www.dordevoi.ro/Placeholder.png" alt="your image" />

               </center>

           </td>

           <td style="width:70%;">

             <center>

               <div class="form-group">

                   <h3>Nume</h3>

                   <input style="width:70%;" type="text" class="form-control" name="Name1"  required >

                </div>

                <div class="form-group">

                    <h3>Telefon</h3>

                   <input style="width:70%;" type="tel" class="form-control" name="Phone1" required >

                </div>

                <div class="form-group">

                    <h3>Email</h3>

                   <input style="width:70%;" type="email" class="form-control" name="Email1" required >

                </div>

                <div class="form-group">

                    <h3>Adresa</h3>

                   <input style="width:70%;" type="text" class="form-control" name="Adress1" required >

                </div>
                
                

                 <input type="submit" class="btn btn-success">

             </center>

           </td>

           </tr> 
            
       

        </div>
           
       </form> 

        

        

   

</div>



</body>

</html>

