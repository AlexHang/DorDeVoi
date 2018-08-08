<?php

session_start();

$servername = "localhost";

$username = "dordevoi_admin";

$password = "Qerquzdwh87tV>N@f";

$dbname = "dordevoi_database1";

$id=$_POST["MobileSafeId"];

echo $_POST["MobileSafeId"];


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 



$sql = "SELECT * FROM `Safes` WHERE SafeID =".$id;

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row

    while($row = $result->fetch_assoc()) {

        $safe=$row;

    }

} else {

    echo "0 results";

}





?>

<!DOCTYPE html>

<html>

<head>

	<title>My Safe</title>

	<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">



</head>

<style type="text/css">

	html,body{

		background-color: #dedfe0;

	}

	

	

	.container{

    margin-top:20px;

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



/** timeline box structure **/

.timeline {

  list-style: none;

  padding: 20px 0 20px;

  position: relative;

}



.timeline:before {

  top: 0;

  bottom: 0;

  position: absolute;

  content: " ";

  width: 3px;

  background-color: #eee;

  left: 50%;

  margin-left: -1.5px;

}



.tldate {

  display: block;

  width: 200px;

  background: #414141;

  border: 3px solid #212121;

  color: #ededed;

  margin: 0 auto;

  padding: 3px 0;

  font-weight: bold;

  text-align: center;

  -webkit-box-shadow: 0 0 11px rgba(0,0,0,0.35);

}



.timeline li {

  margin-bottom: 25px;

  position: relative;

}



.timeline li:before, .timeline li:after {

  content: " ";

  display: table;

}

.timeline li:after {

  clear: both;

}

.timeline li:before, .timeline li:after {

  content: " ";

  display: table;

}



/** timeline panels **/

.timeline li .timeline-panel {

  width: 46%;

  float: left;

  background: #fff;

  border: 1px solid #d4d4d4;

  padding: 20px;

  position: relative;

  -webkit-border-radius: 8px;

  -moz-border-radius: 8px;

  border-radius: 8px;

  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);

  -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);

  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.15);

}



/** panel arrows **/

.timeline li .timeline-panel:before {

  position: absolute;

  top: 26px;

  right: -15px;

  display: inline-block;

  border-top: 15px solid transparent;

  border-left: 15px solid #ccc;

  border-right: 0 solid #ccc;

  border-bottom: 15px solid transparent;

  content: " ";

}



.timeline li .timeline-panel:after {

  position: absolute;

  top: 27px;

  right: -14px;

  display: inline-block;

  border-top: 14px solid transparent;

  border-left: 14px solid #fff;

  border-right: 0 solid #fff;

  border-bottom: 14px solid transparent;

  content: " ";

}

.timeline li .timeline-panel.noarrow:before, .timeline li .timeline-panel.noarrow:after {

  top:0;

  right:0;

  display: none;

  border: 0;

}



.timeline li.timeline-inverted .timeline-panel {

  float: right;

}



.timeline li.timeline-inverted .timeline-panel:before {

  border-left-width: 0;

  border-right-width: 15px;

  left: -15px;

  right: auto;

}



.timeline li.timeline-inverted .timeline-panel:after {

  border-left-width: 0;

  border-right-width: 14px;

  left: -14px;

  right: auto;

}





/** timeline circle icons **/

.timeline li .tl-circ {

  position: absolute;

  top: 23px;

  left: 50%;

  text-align: center;

  background: #6a8db3;

  color: #fff;

  width: 35px;

  height: 35px;

  line-height: 35px;

  margin-left: -16px;

  border: 3px solid #90acc7;

  border-top-right-radius: 50%;

  border-top-left-radius: 50%;

  border-bottom-right-radius: 50%;

  border-bottom-left-radius: 50%;

  z-index: 99999;

}





/** timeline content **/



.tl-heading h4 {

  margin: 0;

  color: #c25b4e;

}



.tl-body p, .tl-body ul {

  margin-bottom: 0;

}



.tl-body > p + p {

  margin-top: 5px;

}



/** media queries **/

@media (max-width: 991px) {

  .timeline li .timeline-panel {

    width: 44%;

  }

}



@media (max-width: 700px) {

  .page-header h1 { font-size: 1.8em; }

  

  ul.timeline:before {

    left: 40px;

  }

  

  .tldate { width: 140px; }



  ul.timeline li .timeline-panel {

    width: calc(100% - 90px);

    width: -moz-calc(100% - 90px);

    width: -webkit-calc(100% - 90px);

  }



  ul.timeline li .tl-circ {

    top: 22px;

    left: 22px;

    margin-left: 0;



  }

  ul.timeline > li > .tldate {

    margin: 0;

  }



  ul.timeline > li > .timeline-panel {

    float: right;

  }



  ul.timeline > li > .timeline-panel:before {

    border-left-width: 0;

    border-right-width: 15px;

    left: -15px;

    right: auto;

  }



  ul.timeline > li > .timeline-panel:after {

    border-left-width: 0;

    border-right-width: 14px;

    left: -14px;

    right: auto;

  }

}



.nav-tabs > li, .nav-pills > li {

    float:none;

    display:inline-block;

    *display:inline; /* ie7 fix */

     zoom:1; /* hasLayout ie7 trigger */

}



.nav-tabs, .nav-pills {

    text-align:center;

}







</style>

<body>

    

    <nav class="navbar navbar-inverse" style="height:150px;">

  <div class="container-fluid">

    <div class="navbar-header">

      <a class="navbar-brand" href="https://dordevoi.ro/MyProfile/Profile.php"><h1 style=" margin-top:-20px;"><a href="https://dordevoi.ro/MyProfile/Profile.php"><img src="logo.png" style="height:130px; margin-top:-30px;"></a></h1></a>

    </div>

   <!-- <ul class="nav navbar-nav">

       

      <li><a href="https://dordevoi.ro/Profile/profile.php"><h2><i class="fas fa-home"> Home</i></h2></a></li> 

      

      <li><a href="#" target="_blank"><h2><i class="fas fa-book"></i>Terms and Conditions</h2></a></li>

    </ul>
   -->
  </div>

</nav>

    

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

  		<div class="col-lg-6">

  			<center>

           <img src=<?php echo '"https://dordevoi.ro/Safe/uploads/'.$id.'.jpg"'; ?> style="height: 350px;" class="img-thumbnail">

           <h1 ><i><strong><?php echo $safe["Reciever"]; ?></strong></i></h1>

           <h3><i>Safe ID: <?php echo $safe["SafeID"]; ?></i></h3>

           <h3><i>Email: <?php echo $safe["ContactEmail"]; ?></i></h3>

           <h3><i>Cheie Acces: <?php echo $safe["Access_Key"]; ?></i></h3>


           <ul class="nav nav-tabs">

    <li class="active"><a data-toggle="tab" href="#home"><button type="button" class="btn btn-success" style="background-color: #00A591; border-radius:10px;"><h3>Mesaj Text</h3></button></a></li>

    <li><a data-toggle="tab" href="#menu1"><button type="button"  class="btn btn-primary" style="background-color:#223A5E; border-radius:10px;"><h3>Imagine Noua</h3></button></a></li>

    <li><a data-toggle="tab" href="#menu2"> <button type="button" class="btn btn-warning" style="background-color:#D8AE47; border-radius:10px;"><h3>Video Nou</h3></button></a></li>

    <li><a data-toggle="tab" href="#menu5"> <button type="button" class="btn btn-warning" style="background-color:#D8AE47; border-radius:10px;"><h3>Inregistreaza un Video</h3></button></a></li>


    <li><a data-toggle="tab" href="#menu3"> <button type="button" class="btn btn-info" style="background-color:#6B5B95; border-radius:10px;"><h3>Audio Nou</h1></button></a></li>

    <li><a data-toggle="tab" href="#menu4"> <button type="button" class="btn"style="background-color:#DFCFBE; border-radius:10px;"><h3 style="color:white">Document Office </h1></button></a></li>
<input type="file" accept="image/*" capture="camera" />

  </ul>



  <div class="tab-content">

    <div id="home" class="tab-pane fade in active">

    <form action="https://dordevoi.ro/Safe/Assets/Text/AddText.php" method="POST"  target="_blank">    

      <h3>Write a message</h3>

      <div class="form-group">

       <label for="comment">Message</label>

       <textarea  class="form-control" rows="5" id="comment" name="message" required></textarea>

       </div>

      <div class="form-group">

                 <label for="date">Delivery Date</label>

                 <input type="date" name="date" id="date" required>

            </div>

            <input style="display:none" type="text" value=<?php echo '"'.$id.'"';  ?> name="ID" >

         <input class="btn btn-primary btn-lg" style="background-color:#006E51; border-radius: 10px;" type="submit">

      </form>

    </div>

    <div id="menu1" class="tab-pane fade">

      <form action="https://dordevoi.ro/Safe/Assets/Images/ImageUpload.php" method="POST" enctype="multipart/form-data"  target="_blank">

          <table style="width:100%;"><tr style="width:100%;"><td style="width:50%;"><center><input type='file' name="fileToUpload" onchange="readURL(this);" accept="image/*"/></center>

 

 <center><img id="blah" src="http://placehold.it/180"  alt="your image" style="width:80%;

  padding:10px;

  background:#2d2d2d;" /></td>

  <td style="width:50%;">

  <div class="form-group">

       <label for="comment">Message</label>

       <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>

       </div>

       <div class="form-group">

                 <label for="date">Delivery Date</label>

                 <input type="date" name="date" id="date" required>

            </div>

            <input type="text" style="display:none" value=<?php echo '"'.$id.'"';  ?> name="ID" >

            <input class="btn btn-primary btn-lg" style="background-color:#006E51; border-radius: 10px;" type="submit">

       </center></td></tr></table></form>

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

    </div>

    <div id="menu2" class="tab-pane fade">

      <form action="https://dordevoi.ro/Safe/Assets/Videos/VideoUpload.php" method="Post" enctype="multipart/form-data"  target="_blank">

          	<div class="form-group">

          	    <h3>Only mp4 files supported</h3>

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

                        <input type="file" accept="video/mp4" name="file"/> <!-- rename it -->

                    </div>

                </span>

            </div>

	</div>

	

	<div class="form-group">

       <label for="comment">Message</label>

       <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>

       </div>

       <div class="form-group">

                 <label for="date">Delivery Date</label>

                 <input type="date" name="date" id="date" required>

            </div>

            <input style="display:none" type="text" value=<?php echo '"'.$id.'"';  ?> name="ID" >

	<div class="form-group">
        <center>
	    <input class="btn btn-primary btn-lg" style="background-color:#006E51; border-radius: 10px;" type="submit"></center>

	</div>

      </form>

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

    </div>

    
    <div id="menu5" class="tab-pane fade in ">

                            <h1>
                            RecordRTC / PHP / FFmpeg
                        </h1>
                        <section class="experiment">
                            <p style="text-align: center;">
                                <video id="preview" controls style="border: 1px solid rgb(15, 158, 238); height: 720px; max-width: 100%; vertical-align: top; width:600px;"></video>
                            </p>
                    
                            <button id="record">Record</button>
                            <button id="stop" disabled>Stop</button>
                    
                            <div id="container" style="padding: 1em 2em;"></div>
                            <div class="modal fade" id="rec_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="z-index:50;" class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <form target="_Blank" method="Post" action="recordname.php">          <h1>Introduceti Data la care sa fie disponibil mesajul</h1>
                                <input style="display:none" type="text" name="id" value="<?php echo $id; ?>">
                                 <input style="display:none" type="text" id="fname" name="fname">
                                 <input type="date" name="date">
                                 <center><input type="submit" class="btn btn-success"></center>
                            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                            
                        </section>
                        <script src="https://cdn.webrtc-experiment.com/RecordRTC.js"></script>

                    <script>
                    function PostBlob(audioBlob, videoBlob, fileName) {
                        var formData = new FormData();
                        formData.append('filename', fileName);
                        formData.append('audio-blob', audioBlob);
                        formData.append('video-blob', videoBlob);
                        xhr('Assets/record/save.php', formData, function(ffmpeg_output) {
                            document.querySelector('h1').innerHTML = ffmpeg_output.replace(/\\n/g, '<br />');
                            preview.src = 'uploads/' + fileName + '-merged.webm';
                            preview.play();
                            preview.muted = false;
                        });
                    }
                    var record = document.getElementById('record');
                    var stop = document.getElementById('stop');
                    var audio = document.querySelector('audio');
                    var recordVideo = document.getElementById('record-video');
                    var preview = document.getElementById('preview');
                    var container = document.getElementById('container');
                    var recordAudio, recordVideo;
                    record.onclick = function() {
                        record.disabled = true;
                        !window.stream && navigator.getUserMedia({
                            audio: true,
                            video: true
                        }, function(stream) {
                            window.stream = stream;
                            onstream();
                        }, function(error) {
                            alert(JSON.stringify(error, null, '\t'));
                        });
                        window.stream && onstream();
                        function onstream() {
                            preview.src = window.URL.createObjectURL(stream);
                            preview.play();
                            preview.muted = true;
                            recordAudio = RecordRTC(stream, {
                                type: 'audio',
                                recorderType: StereoAudioRecorder,
                                // bufferSize: 16384,
                                onAudioProcessStarted: function() {
                                    recordVideo.startRecording();
                                }
                            });
                            var videoOnlyStream = new MediaStream();
                            videoOnlyStream.addTrack(stream.getVideoTracks()[0]);
                            recordVideo = RecordRTC(videoOnlyStream, {
                                type: 'video',
                                // recorderType: MediaStreamRecorder || WhammyRecorder
                            });
                            recordAudio.startRecording();
                            stop.disabled = false;
                        }
                    };
                    var fileName;
                    stop.onclick = function() {
                        var result = confirm('Apasati Ok daca doriti sa salvati videoclipul, sau "Cancel" daca doriti sa continuati sa inregistrati.');
if (result) {
    //Logic to delete the item
                        $("#rec_modal").modal();
                        document.querySelector('h1').innerHTML = 'Getting Blobs...';
                        record.disabled = false;
                        stop.disabled = true;
                        preview.src = '';
                        preview.poster = 'ajax-loader.gif';
                        var d = new Date();
                        fileName = d.getTime() + Math.round(Math.random() * 99999999) + 99999999;
                        recordAudio.stopRecording(function() {
                            document.querySelector('h1').innerHTML = 'Got audio-blob. Getting video-blob...';
                            recordVideo.stopRecording(function() {
                                document.querySelector('h1').innerHTML = 'Uploading to server...';
                                PostBlob(recordAudio.getBlob(), recordVideo.getBlob(), fileName);
                            });
                        });
                        document.getElementById("fname").value = fileName;
                        
                    } };
                    function xhr(url, data, callback) {
                        var request = new XMLHttpRequest();
                        request.onreadystatechange = function() {
                            if (request.readyState == 4 && request.status == 200) {
                                callback(request.responseText);
                            }
                        };
                        request.open('POST', url);
                        request.send(data);
                    }
                    </script>

    </div>

            

    <div id="menu3" class="tab-pane fade">

    <h3>Only mp3 and wav files supported</h3>

       <form action="https://dordevoi.ro/Safe/Assets/Audio/AddAudio.php" method="Post" enctype="multipart/form-data"  target="_blank" >

          	<div class="form-group">

          	    

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

                        <input type="file" accept="audio/mp3, audio/wav" name="file"/> <!-- rename it -->

                    </div>

                </span>

            </div>

	</div>

	

	<div class="form-group">

       <label for="comment">Message</label>

       <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>

       </div>

       <div class="form-group">

                 <label for="date">Delivery Date</label>

                 <input type="date" name="date" id="date" required>

            </div>

            <input style="display:none" type="text" value=<?php echo '"'.$id.'"';  ?> name="ID" >

	<div class="form-group">

	    <input class="btn btn-primary btn-lg" style="background-color:#006E51; border-radius: 10px;" type="submit">

	</div>

      </form>

      

  </div>

  

  <div id="menu4" class="tab-pane fade">

    <h3>Only doc/docx, ppt, xls and PDF supported</h3>

       <form action="https://dordevoi.ro/Safe/Assets/Documents/DocumentUpload.php" method="Post" enctype="multipart/form-data"  target="_blank" >

          	<div class="form-group">

          	    

		<div class="input-group input-file" name="file">

			<span class="input-group-btn">

        		<button class="btn btn-default btn-choose" type="button">Choose</button>

    		</span>

    		<input type="text" class="form-control" placeholder='Choose a file...' />

    		<span class="input-group-btn">

       			 <button class="btn btn-warning btn-reset" type="button">Reset</button>

    		</span>

		</div>

	</div>

	

	<div class="form-group">

       <label for="comment">Message</label>

       <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>

       </div>

       <div class="form-group">

                 <label for="date">Delivery Date</label>

                 <input type="date" name="date" id="date" required>

            </div>

            <input style="display:none" type="text" value=<?php echo '"'.$id.'"';  ?> name="ID" >

	<div class="form-group">

	    <input class="btn btn-primary btn-lg" style="background-color:#006E51; border-radius: 10px;" type="submit">
	</div>

      </form>

      <script>

          function bs_input_file() {

	$(".input-file").before(

		function() {

			if ( ! $(this).prev().hasClass('input-ghost') ) {

				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0' accept='application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/pdf,' required>");

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

<div class="row">

    <h1>

        If you want to make the message available now, set the delivery date to today

        </h1>

</div>



            </center>

  		</div>

  		<div class="col-lg-6" >

  			<ul class="timeline">

    <li><div class="tldate">Jan 2018 <br> You created this safe</div></li>

    

    

    <?php

    $sql = "SELECT * FROM `Assets` WHERE SafeID =".$id;

    $result = $conn->query($sql);

if ($result->num_rows > 0) {

    $i=0;

    // output data of each row

    while($row = $result->fetch_assoc()) {

        if($i%2==0)

        {

          echo '<li class="timeline-inverted">

      <div class="tl-circ"></div>

      <div class="timeline-panel" style="max-height:500px; overflow:scroll;">

        <div class="tl-heading">

          <h4>'.$row["Type"].' message</h4>

          <h4 style="text-align: right; ""><i id="msg'.$row["Asset_ID"].'" class="fas fa-trash-alt"></i></h4>

          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>'.$row["Date_Available"].'</small></p>

        </div>

        <div class="tl-body">

          <p>'.$row["Message"].'</p>';

          if($row["Type"]=="Image")

          {echo '<img src="'.$row["Media_URL"].'" width="80%">' ;}
          
          if($row["Type"]=="Recorded")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video class="embed-responsive-item" controls  poster="http://www2.videojs.com/img/html5-video.png"> 

<source src="https://dordevoi.ro/Safe/Assets/record/uploads/'.$row["Media_URL"].'.webm" type="video/mp4">

</video>



</div>';}

              if($row["Type"]=="Video")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video class="embed-responsive-item" controls  poster="http://www2.videojs.com/img/html5-video.png"> 

<source src="'.$row["Media_URL"].'" type="video/mp4">

</video>



</div>';}

            if($row["Type"]=="Audio")

            {

                echo '<audio controls >';

                if($row["VideoType"]=="mp3")

                {echo '<source src="'.$row["Media_URL"].'" type="audio/mpeg">';}

                if($row["VideoType"]=="wav")

                 {echo'<source src="'.$row["Media_URL"].'" type="audio/wav">';}



echo '</audio>';

            }

            if($row["Type"]=="Document")

      {

          echo '<center><a href="'.$row["Media_URL"].'" download="DorDeVoi"><button type="button" class="btn btn-danger">Dowload File</button></a></center>';

      }

        echo '</div>

      </div>

    </li>';  

        }

        else 

        {

          echo '<li>

      <div class="tl-circ"></div>

      <div class="timeline-panel" style="max-height:500px; overflow:scroll;">

        <div class="tl-heading">

          <h4>'.$row["Type"].' message</h4>

          <h4 style="text-align: right; "><i class="fas fa-trash-alt" id="msg'.$row["Asset_ID"].'"></i></h4>

          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>'.$row["Date_Available"].'</small></p>

        </div>

        <div class="tl-body">

          <p>'.$row["Message"].'</p>';

          if($row["Type"]=="Image")

          {echo '<img src="'.$row["Media_URL"].'" width="80%">' ;}

          

           if($row["Type"]=="Audio")

            {

                echo '<audio controls >';

                if($row["VideoType"]=="mp3")

                {echo '<source src="'.$row["Media_URL"].'" type="audio/mpeg">';}

                if($row["VideoType"]=="wav")

                 {echo'<source src="'.$row["Media_URL"].'" type="audio/wav">';}



echo '</audio>';

            }

          

          if($row["Type"]=="Video")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video class="embed-responsive-item" controls  poster="http://www2.videojs.com/img/html5-video.png"> 

<source src="'.$row["Media_URL"].'" type="video/mp4">

</video>



</div>';}


     if($row["Type"]=="Recorded")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video class="embed-responsive-item" controls  poster="http://www2.videojs.com/img/html5-video.png"> 

<source src="https://dordevoi.ro/Safe/Assets/record/uploads/'.$row["Media_URL"].'.webm" type="video/mp4">

</video>



</div>';}

      if($row["Type"]=="Document")

      {

          echo '<center><a href="'.$row["Media_URL"].'" download="DorDeVoi"><button type="button" class="btn btn-danger">Dowload File</button></a></center>';

      }

        echo '</div>

      </div>

    </li>';  

        }

        

        

       $i++; 

       

       echo '<script> $("#msg'.$row["Asset_ID"].'").click(function() {

        $("#msgname").val("'.$row["Asset_ID"].'");

        $("#form1").submit();

        setTimeout(myFunction, 1000);

        function myFunction() {

        

        location.reload(true);

}

           

       }); </script>';

       

       

    }

} 

    ?>

    

    <li><div class="tldate">Today</div></li>

    

  </ul>

  		</div>



  	</div>





  </div>

  <form id="form1" method="Post" action="deleteAsset.php" target="Iframe1"> <!--  target="Iframe1" -->

      <input type="text" name="msgname" id="msgname">

  </form>

 

  

  <script>

/*      $('form').submit(function(ev) {

     setTimeout(myFunction, 3000);

        function myFunction() {

        

        location.reload(true);

}

    

    this.submit(); 

}); */

  </script>

  

</body>

</html>