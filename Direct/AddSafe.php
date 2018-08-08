<?php 
session_start();
?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
   	body {
    /* The image used */
    background-image: url("https://dordevoi.ro/LogInPage/field.png");
    background-color: #415e8c;
    /* Full height */
    height: 100%; 
    background-repeat:no-repeat;
    /* Center and scale the image nicely */
    background-position: center;
    background-attachment: fixed;
    background-size: cover;

}
input[type=file]{
padding:10px;
background:#2d2d2d;
width:50%;
}

.centru {
   width: 100%;
   height: 100%;
   position: absolute;
   left: 0%;
   top: 25%; 
   margin-left: 0px;
   margin-top: 0px;
}
</style>
<script>
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

    </head>
    <body>
        <div class="container-fluid" style=" margin: 0 auto;
  width: 100%; padding-left:0; padding-right:0;">
            <nav class="navbar navbar-inverse" style="height:100px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://dordevoi.ro/MyProfile/Profile.php"><b><h1><img src="logo.png" style="height:2em; margin-top:-20px;"></h1></b></a>
    </div>
   
  
  </div>
</nav>

<form id="form1" class="centru" action="Create_Safe.php" method="post" enctype="multipart/form-data">

            <div class="col-lg-6">
       <center><input type='file' name="fileToUpload" onchange="readURL(this);"/></center>

 <center><img id="blah" src="https://www.dordevoi.ro/Placeholder.png"  alt="your image" style="width:50%;
  padding:10px;
  background:#2d2d2d;" /></center>
        </div>
         <div style="border-radius:25px; background-color:#a1aab7;" class="col-lg-4">
              <h2><br></h2>
             <div class="form-group" style="margin-top:0px;">
      <center><label for="usr">Destinatar</label></center>
      <input type="text" class="form-control" name="reciever" id="usr" required>
    </div>
     <h2><br></h2>
    <div class="form-group" style="margin-top:0px; border-radius:15px; background-color:#a1aab7;">
      <center><label for="email">Email-ul destinatarului:</label></center>
      <input type="email" class="form-control" name="email" id="email" required>
    <h2><br></h2>
    </div>
    
    <div class="form-group" style="margin-top:0px; border-radius:15px; background-color:#a1aab7;">
      <center><label for="phone">Telefonulul destinatarului:</label></center>
      <input type="number" class="form-control" onkeyup="validatephone(this)" name="phone" id="phone" min="100000000" max="9000000000"  required>
    <h2><br></h2>
    <div class="form-group" style="margin-top:0px; border-radius:15px; background-color:#a1aab7;">
      <center><label for="adress">Adresa destinatarului:</label></center>
      <input type="text" class="form-control" name="adress" id="adress" required>
    <h2><br></h2>
    </div>
    </div>
    <script>
    
        $('#form1 input[type=email]').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('va rugam sa adaugati un email valid');  
    }
});

$('#form1 input[type=number]').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('va rugam sa adaugati un numar de telefon valid');  
    }
});
    
    
        function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
    </script>
       <!--    <div class="form-group" style=" border:5px solid red; border-radius:15px; background-color:#a1aab7;">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="7" name="comment" id="comment"></textarea>
    </div>
  
    <div class="form-group" style=" border:5px solid red; border-radius:15px; background-color:#a1aab7;">
        <label for="sel1">Visibility</label>
      <select class="form-control" id="sel1" name="visibility">
        <option>Private</option>
        
      </select>
    </div>
    
    -->
    <div class="form-group">
        <center><input class="btn btn-success" type="submit" value="Creeaza un mesaj direct nou"></center>
    </div>
         </div>
 </form>
  </div>
    </body>
    
</html>