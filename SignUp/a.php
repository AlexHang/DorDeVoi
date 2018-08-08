<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">

		body {
    /* The image used */
    background-image: url("bg1.jpg");
    background-size: 100% 100%;
    padding-top: 150px;
    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;

}

h1{
     color: white;
     font-size: 45px;
}

p {
     color: white;
     font-size: 30px;
}

fieldset {
    border: thin solid #ccc; 
    border-radius: 4px;
    padding: 20px;
    padding-left: 40px;
    background: #fbfbfb;

}
legend {
   color: #678;
}
.form-control {
    width: 95%;
}
label small {
    color: #678 !important;
}
span.req {
    color:maroon;
    font-size: 112%;
}



/* For Firefox */
input[type='number'] {
    -moz-appearance:textfield;
}
/* Webkit browsers like Safari and Chrome */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

	</style>
	<script type="text/javascript">
	
		function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Parolele Corespund !"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Parolele nu corespund!"
    }
} 
function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z-@\n\r.1234567890]+/g, '');
}
/*validate email
function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) == false)
    {
    document.getElementById("status").innerHTML    = "<span class='warning'>Email address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";	
    }
}*/
// validate date of birth
function dob_validate(dob)
{
var regDOB = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/;

    if(regDOB.test(dob) == false)
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='warning'>DOB is only used to verify your age.</span>";
    }
    else
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='valid'>Thanks, you have entered a valid DOB!</span>";	
    }
}
// validate address
function add_validate(address)
{
var regAdd = /^(?=.*\d)[a-zA-Z\s\d\/]+$/;
  
    if(regAdd.test(address) == false)
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='warning'>Address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("statusAdd").innerHTML	= "<span class='valid'>Thanks, Address looks valid!</span>";	
    }
}


	</script>  
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-md-6">
	        <!--
                <h1 class="page-header"><img src="logo.png"></h1>
                <p><strong><i></i></strong> <br>
                </p>
                -->
            </div>
        <div class="col-md-6">
            <img src="logo.png">
            <form action="https://dordevoi.ro/SignUp/register.php" method="post" id="fileForm" role="form">
            <fieldset style="border-radius: 40px;"><legend class="text-center"><br>Toate campurile sunt obligatorii<span class="req"><small>  *</small></span></legend>

            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Telefon: </label>
                    <input required type="number" name="phone" id="phone" class="form-control" min="100000000" max="9000000000"  placeholder="Nu va fi folosit pentru publicitate"/> 
            </div>

            <div style="display:none;" class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> Nume: </label>
                    <input class="form-control" type="text" name="name" id = "txt" /> 
                        <div id="errFirst"></div>    
            </div>


            <div style="display:none;" class="form-group">
                <label for="email"><span class="req">* </span> Email : </label> 
                    <input class="form-control" type="text" name="email" id = "email" />   
                        <div class="status" id="status"></div>
            </div>

            <div class="form-group">
                <label  for="username"><span class="req">* </span>Email  <small>Veti folosi email-ul pentru a va loga</small> </label> 
                    <input class="form-control" type="email" name="username" id = "txt" onchange="email1(this.value)" placeholder="minim 6 litere" required />  
                        <div id="errLast"></div>
            </div>
            
            <script>
            function email1( x )
            {
                document.getElementById("email").value = x;
            }
            </script>
            
            <div style="display:none;" class="form-group">
                <label for="Image URL"><span class="req">* </span> Image URL  <small></small> </label> 
                    <input class="form-control" type="text" name="URL" id = "txt"  placeholder="URL to the profile picture"  />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
                <label for="password"><span class="req">* </span> Parola: </label>
                    <input required name="password" type="password" class="form-control" minlength="4" maxlength="16"  id="pass1" /> 

                <label for="password"><span class="req">* </span>  Confirmati Parola: </label>
                    <input required name="password" type="password" class="form-control" minlength="4" maxlength="16" placeholder="Introduceti parola din nou pentru confirmare"  id="pass2" />
                        <span id="confirmMessage" class="confirmMessage"></span>
            </div>

            <div class="form-group">
            
              
                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                

                
            </div>

            <div class="form-group">
                <center>
                <input class="btn btn-success btn-lg" type="submit" name="submit_reg" value="Creati cont"></center>
            </div>
            
            <h1><br></h1>
            
                      <h5> </h5>
 

            </fieldset>
            </form><!-- ends register form 
           <a href="http://www.dordevoi.ro/facebooklog.php"> <button type="button" class="btn btn-primary">Folositi Facebook</button></a>-->

<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 100%; width:100%; z-index: -999999; position: fixed;"><img src="bg1.jpg" style=" -webkit-filter: grayscale(30%); /* Safari 6.0 - 9.0 */
    filter: grayscale(30%); filter: brightness(100%); margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -999999; left: -110.222px; top: 0px;"></div>


        </div><!-- ends col-6 -->
   
        

	</div>
</div>
</body>
</html>