<!DOCTYPE html>

<html>

<head>

	<title>Access Safe</title>

    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style type="text/css">

	

	

	body {

    /* The image used */

   /* background-image: url("https://i.ytimg.com/vi/1ZYbU82GVz4/maxresdefault.jpg");*/

    background-color: #c6cad1;

    padding-top: 50px;

    /* Full height */

    height: 100%; 



    /* Center and scale the image nicely */

    background-position: center;

    background-attachment: fixed;

    background-size: cover;

    background-repeat: no-repeat;



}



@import url(http://fonts.googleapis.com/css?family=Roboto);



* {

    font-family: 'Roboto', sans-serif;

}



#login-modal .modal-dialog {

    width: 350px;

}



#login-modal input[type=text], input[type=password] {

	margin-top: 10px;

}



#div-login-msg,

#div-lost-msg,

#div-register-msg {

    border: 1px solid #dadfe1;

    height: 30px;

    line-height: 28px;

    transition: all ease-in-out 500ms;

}



#div-login-msg.success,

#div-lost-msg.success,

#div-register-msg.success {

    border: 1px solid #68c3a3;

    background-color: #c8f7c5;

}



#div-login-msg.error,

#div-lost-msg.error,

#div-register-msg.error {

    border: 1px solid #eb575b;

    background-color: #ffcad1;

}



#icon-login-msg,

#icon-lost-msg,

#icon-register-msg {

    width: 30px;

    float: left;

    line-height: 28px;

    text-align: center;

    background-color: #dadfe1;

    margin-right: 5px;

    transition: all ease-in-out 500ms;

}



#icon-login-msg.success,

#icon-lost-msg.success,

#icon-register-msg.success {

    background-color: #68c3a3 !important;

}



#icon-login-msg.error,

#icon-lost-msg.error,

#icon-register-msg.error {

    background-color: #eb575b !important;

}



#img_logo {

    max-height: 100px;

    max-width: 100px;

}



/* #########################################

   #    override the bootstrap configs     #

   ######################################### */



.modal-backdrop.in {

    filter: alpha(opacity=50);

    opacity: .8;

}



.modal-content {

    background-color: #ececec;

    border: 1px solid #bdc3c7;

    border-radius: 0px;

    outline: 0;

}



.modal-header {

    min-height: 16.43px;

    padding: 15px 15px 15px 15px;

    border-bottom: 0px;

}



.modal-body {

    position: relative;

    padding: 5px 15px 5px 15px;

}



.modal-footer {

    padding: 15px 15px 15px 15px;

    text-align: left;

    border-top: 0px;

}



.checkbox {

    margin-bottom: 0px;

}



.btn {

    border-radius: 0px;

}



.btn:focus,

.btn:active:focus,

.btn.active:focus,

.btn.focus,

.btn:active.focus,

.btn.active.focus {

    outline: none;

}



.btn-lg, .btn-group-lg>.btn {

    border-radius: 0px;

}



.btn-link {

    padding: 5px 10px 0px 0px;

    color: #95a5a6;

}



.btn-link:hover, .btn-link:focus {

    color: #2c3e50;

    text-decoration: none;

}



.glyphicon {

    top: 0px;

}



.form-control {

  border-radius: 0px;

}





</style>





<script type="text/javascript">

	

     

$(function() {

    

    var $formLogin = $('#login-form');

    var $formLost = $('#lost-form');

    var $formRegister = $('#register-form');

    var $divForms = $('#div-forms');

    var $modalAnimateTime = 300;

    var $msgAnimateTime = 150;

    var $msgShowTime = 2000;



   

    

    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });

    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });

    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });

    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });

    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });

    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });

    

    function modalAnimate ($oldForm, $newForm) {

        var $oldH = $oldForm.height();

        var $newH = $newForm.height();

        $divForms.css("height",$oldH);

        $oldForm.fadeToggle($modalAnimateTime, function(){

            $divForms.animate({height: $newH}, $modalAnimateTime, function(){

                $newForm.fadeToggle($modalAnimateTime);

            });

        });

    }

    

   



</script>





</head>

<body>

    <!-- BEGIN # BOOTSNIP INFO -->

<div class="container">

	<div class="row" style="margin-top:100px;">

		<h1 class="text-center">Enter the Safe ID and the Access key to open your safe</h1>

        <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Open Safe</a></p>

	</div>

</div>

<!-- END # BOOTSNIP INFO -->



<!-- BEGIN # MODAL LOGIN -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; margin-top:50px ">

    	<div class="modal-dialog">

			<div class="modal-content">

				<div class="modal-header" align="center">

					<img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">

						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>

					</button>

				</div>

                

                <!-- Begin # DIV Form -->

                <div id="div-forms">

                

                    <!-- Begin # Login Form -->

                    <form id="login-form" method="Post" action="https://dordevoi.ro/Safe/ViewSafe/check.php">

		                <div class="modal-body">

				    		<div id="div-login-msg">

                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>

                                <span id="text-login-msg">Safe ID:</span>

                            </div>

				    		<input id="login_username" class="form-control" type="text" name="SafeID" placeholder="Safe ID" required>

				    		<div id="div-login-msg">

                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>

                                <span id="text-login-msg">Access Key (15 Characters)</span>

                            </div>

				    		<input id="login_password" class="form-control" type="text" name="Key" placeholder="Access Key" required>

                           

        		    	</div>

				        <div class="modal-footer">

                            <div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>

                            </div>

				    	    

				        </div>

                    </form>

                    <!-- End # Login Form -->

                    

                

                    

                </div>

                <!-- End # DIV Form -->

                

			</div>

		</div>

	</div>

    <!-- END # MODAL LOGIN -->

</body>

</html>