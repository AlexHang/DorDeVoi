<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	    <style>
	    
	    
body {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    color: #888;
    line-height: 30px;
    text-align: center;
    background-color: Silver;
}

strong { font-weight: 500; }

a, a:hover, a:focus {
	color: #4aaf51;
	text-decoration: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

h1, h2 {
	margin-top: 10px;
	font-size: 38px;
    font-weight: 100;
    color: #555;
    line-height: 50px;
}

h3 {
	font-size: 22px;
    font-weight: 300;
    color: #555;
    line-height: 30px;
}

img { max-width: 100%; }

::-moz-selection { background: #4aaf51; color: #fff; text-shadow: none; }
::selection { background: #4aaf51; color: #fff; text-shadow: none; }


.btn-link-1 {
	display: inline-block;
	height: 50px;
	margin: 5px;
	padding: 16px 20px 0 20px;
	background: #4aaf51;
	font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    color: #fff;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}
.btn-link-1:hover, .btn-link-1:focus, .btn-link-1:active { outline: 0; opacity: 0.6; color: #fff; }

.btn-link-1.btn-link-1-facebook { background: #4862a3; }
.btn-link-1.btn-link-1-twitter { background: #55acee; }
.btn-link-1.btn-link-1-google-plus { background: #dd4b39; }

.btn-link-1 i {
	padding-right: 5px;
	vertical-align: middle;
	font-size: 20px;
	line-height: 20px;
}

.btn-link-2 {
	display: inline-block;
	height: 50px;
	margin: 5px;
	padding: 15px 20px 0 20px;
	background: rgba(0, 0, 0, 0.3);
	border: 1px solid #fff;
	font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    color: #fff;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}
.btn-link-2:hover, .btn-link-2:focus, 
.btn-link-2:active, .btn-link-2:active:focus { outline: 0; opacity: 0.6; background: rgba(0, 0, 0, 0.3); color: #fff; }


/***** Top content *****/

.inner-bg {
    padding: 100px 0 170px 0;
}

.top-content .text {
	color: #fff;
}

.top-content .text h1 { color: #fff; }

.top-content .description {
	margin: 20px 0 10px 0;
}

.top-content .description p { opacity: 0.8; }

.top-content .description a {
	color: #fff;
}
.top-content .description a:hover, 
.top-content .description a:focus { border-bottom: 1px dotted #fff; }

.form-box {
	margin-top: 35px;
}

.form-top {
	overflow: hidden;
	padding: 0 25px 15px 25px;
	background: #fff;
	-moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; border-radius: 4px 4px 0 0;
	text-align: left;
}

.form-top-left {
	float: left;
	width: 75%;
	padding-top: 25px;
}

.form-top-left h3 { margin-top: 0; }

.form-top-right {
	float: left;
	width: 25%;
	padding-top: 5px;
	font-size: 66px;
	color: #ddd;
	line-height: 100px;
	text-align: right;
}

.form-bottom {
	padding: 25px 25px 30px 25px;
	background: #eee;
	-moz-border-radius: 0 0 4px 4px; -webkit-border-radius: 0 0 4px 4px; border-radius: 0 0 4px 4px;
	text-align: left;
}

.form-bottom form textarea {
	height: 100px;
}

.form-bottom form button.btn {
	width: 100%;
}

.form-bottom form .input-error {
	border-color: #4aaf51;
}

.social-login {
	margin-top: 35px;
}

.social-login h3 {
	color: #fff;
}

.social-login-buttons {
	margin-top: 25px;
}


/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {
	
	.inner-bg { padding: 60px 0 110px 0; }

}

@media (max-width: 415px) {
	
	h1, h2 { font-size: 32px; }

}

	        
input[type="text"], 
input[type="password"], 
textarea, 
textarea.form-control {
	height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #f8f8f8;
    border: 3px solid #ddd;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: #888;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

textarea, 
textarea.form-control {
	padding-top: 10px;
	padding-bottom: 10px;
	line-height: 30px;
}

input[type="text"]:focus, 
input[type="password"]:focus, 
textarea:focus, 
textarea.form-control:focus {
	outline: 0;
	background: #fff;
    border: 3px solid #ccc;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
}

input[type="text"]:-moz-placeholder, input[type="password"]:-moz-placeholder, 
textarea:-moz-placeholder, textarea.form-control:-moz-placeholder { color: #888; }

input[type="text"]:-ms-input-placeholder, input[type="password"]:-ms-input-placeholder, 
textarea:-ms-input-placeholder, textarea.form-control:-ms-input-placeholder { color: #888; }

input[type="text"]::-webkit-input-placeholder, input[type="password"]::-webkit-input-placeholder, 
textarea::-webkit-input-placeholder, textarea.form-control::-webkit-input-placeholder { color: #888; }



button.btn {
	height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    border: 0;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: #fff;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
    text-shadow: none;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

button.btn:hover { opacity: 0.6; color: #fff; }

button.btn:active { outline: 0; opacity: 0.6; color: #fff; -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none; }

button.btn:focus { outline: 0; opacity: 0.6; background: #4aaf51; color: #fff; }

button.btn:active:focus, button.btn.active:focus { outline: 0; opacity: 0.6; background: #4aaf51; color: #fff; }
	    </style>
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><img src="logo.png"></h1>
                            <div class="description">
                            	<p>
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 form-box">
                             <!-- 
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to Dor de Voi</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            -->
                            <div class="form-bottom" style="background-color:#E8E8E8; border-radius:50px;">
			                    <form target="result" id="target" role="form" action="https://dordevoi.ro/LogInPage/LogInCheck.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Nume de utilizator</label>
			                        	<input type="text" name="username" placeholder="Nume de utilizator" class="form-username form-control" id="form-username" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Parola</label>
			                        	<input type="password" name="password" placeholder="Parola" class="form-password form-control" id="form-password" required>
			                        </div>
			                        <center>
			                            <iframe style="margin: 0px;
                                                        padding: 0px;
                                                        border: 0px;
                                                        display:block;" name="result" id="result" width="100%;" height="100px;"> </iframe>
			                        
			                        <button style="width:60%;" type="submit" class="btn btn-primary" >Intrati in cont</button>
									<br>
					               
			                    </form> 
			                    <script>
			                        
			                    </script>
			                    <p><br></p>
                                <a href="https://dordevoi.ro/SignUp/ContNou.php"  class="btn btn-warning" style="width: 60%;"><p >Nu aveti cont ? Creati un cont</p></a></center>
          
                       
                        	<center><h3>Sau va puteti loga cu</h3>
                        	<div class="social-login-buttons">
	                        	<a href="http://www.dordevoi.ro/facebooklog.php" class="btn btn-link-1 btn-link-1-facebook" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<!--
	                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>--></center>
                        	</div>
                    
                  
		                    </div>
                        </div>
                    </div>
                    
					
                </div>
            </div>
            
          
            
            
        </div>
        
        <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 100%; width:100%; z-index: -999999; position: fixed;"><img src="field.png" style=" -webkit-filter: grayscale(30%); /* Safari 6.0 - 9.0 */
    filter: grayscale(30%); filter: brightness(100%); margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; max-height: none; max-width: none; z-index: -999999; left: -110.222px; top: 0px;"></div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
       <!-- <script src="assets/js/jquery.backstretch.min.js"></script> -->  
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>