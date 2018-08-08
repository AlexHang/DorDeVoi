


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

    $id=$_POST["TimelineID"];


    $sql = "SELECT * FROM `Direct_Assets` WHERE SafeID =".$id;

    $result = $conn->query($sql);

if ($result->num_rows > 0) {

    $i=0;
    $image_number = 0;

    // output data of each row

    while($row = $result->fetch_assoc()) {

        if($row["Type"]=="Text")
            {$msgType="Mesaj text";}
         if($row["Type"]=="Image")
            {$msgType="Imagine";}
            if($row["Type"]=="Audio")
            {$msgType="Mesaj Audio";}
            if($row["Type"]=="Recorded")
            {$msgType="Video inregistrat";}
            if($row["Type"]=="Viceo")
            {$msgType="Video";}
            if($row["Type"]=="Document")
            {$msgType="Document";}
        
        if($i%2==0)

        {
           
            
          echo '<li class="timeline-inverted">

      <div class="tl-circ"></div>

      <div class="timeline-panel" style="max-height:500px; overflow:scroll;">

        <div class="tl-heading">

          <h4>'.$msgType.'</h4>

          <h4 style="text-align: right; ""><i id="msg'.$row["Asset_ID"].'" class="fas fa-trash-alt" onclick="deletemesage('.$row["Asset_ID"].')"></i></h4>

          <input type="date" name="date" id="date"  value="'.$row["Date_Available"].'" onchange="date_edit('.$row["Asset_ID"].', this.value)">

        </div>

        <div class="tl-body">

          <p>'.$row["Message"].'</p>';

          if($row["Type"]=="Image")

          {echo '<img src="'.$row["Media_URL"].'" width="80%" data-toggle="modal" data-target="#myModal_imageZoom'.$image_number.'" 
          onclick="isAnythingPlaying=1;">
          
          <div class="modal fade" id="myModal_imageZoom'.$image_number.'" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <img src="'.$row["Media_URL"].'" style="width:100%;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="isAnythingPlaying=0;" data-dismiss="modal">Inchide</button>
        </div>
      </div>
      
    </div>
  </div>
          
          
          ' ;
              $image_number++;
          }
          
          if($row["Type"]=="Recorded")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video onplay = "isAnythingPlaying=1;" onpause="isAnythingPlaying=0;" id="vid'.$row["Media_URL"].'" class="embed-responsive-item" controls  > 

<source src="https://dordevoi.ro/Direct/Assets/record/uploads/'.$row["Media_URL"].'.webm" type="video/mp4">
</video>
<audio id="audio'.$row["Media_URL"].'" class="embed-responsive-item" controls style="display:none">
<source src="https://dordevoi.ro/Direct/Assets/record/uploads/'.$row["Media_URL"].'.wav" type="audio/wav">
</audio>


<script>
    document.getElementById("vid'.$row["Media_URL"].'").ontimeupdate = function() {
        
        document.getElementById("audio'.$row["Media_URL"].'").currentTime = document.getElementById("vid'.$row["Media_URL"].'").currentTime;
    };
    document.getElementById("vid'.$row["Media_URL"].'").onplay = function() {
        
        document.getElementById("audio'.$row["Media_URL"].'").play()
    };
    
    document.getElementById("vid'.$row["Media_URL"].'").onpause  = function() {
        
        document.getElementById("audio'.$row["Media_URL"].'").pause()
    };
    
</script>

</div>';}

              if($row["Type"]=="Video")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video onplay = "isAnythingPlaying=1;" onpause="isAnythingPlaying=0;" class="embed-responsive-item" controls  poster="https://dordevoi.ro/MyProfile/logo.png"> 

<source src="'.$row["Media_URL"].'" type="video/mp4">

</video>



</div>';}

            if($row["Type"]=="Audio")

            {

                echo '<audio onplay = "isAnythingPlaying=1;" onpause="isAnythingPlaying=0;" controls >';

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

          <h4>'.$msgType.'</h4>

          <h4 style="text-align: right; "><i class="fas fa-trash-alt" id="msg'.$row["Asset_ID"].'" onclick="deletemesage('.$row["Asset_ID"].')"></i></h4>

    <input type="date" name="date" id="date"  value="'.$row["Date_Available"].'" onchange="date_edit('.$row["Asset_ID"].', this.value)">

        </div>

        <div class="tl-body">

          <p>'.$row["Message"].'</p>';

          if($row["Type"]=="Image")

          { {echo '<img src="'.$row["Media_URL"].'" width="80%" data-toggle="modal" data-target="#myModal_imageZoom'.$image_number.'" 
          onclick="isAnythingPlaying=1;">
          
          <div class="modal fade" id="myModal_imageZoom'.$image_number.'" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <img src="'.$row["Media_URL"].'" style="width:100%;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="isAnythingPlaying=0;" data-dismiss="modal">Inchide</button>
        </div>
      </div>
      
    </div>
  </div>
          
          
          ' ;
              $image_number++;
          }}

          

           if($row["Type"]=="Audio")

            {

                echo '<audio onplay = "isAnythingPlaying=1;" onpause="isAnythingPlaying=0;" controls >';

                if($row["VideoType"]=="mp3")

                {echo '<source src="'.$row["Media_URL"].'" type="audio/mpeg">';}

                if($row["VideoType"]=="wav")

                 {echo'<source src="'.$row["Media_URL"].'" type="audio/wav">';}



echo '</audio>';

            }

          

          if($row["Type"]=="Video")

          { echo '<div class="embed-responsive embed-responsive-16by9">

<video onplay="isAnythingPlaying=1;" onpause="isAnythingPlaying=0;" class="embed-responsive-item" controls  poster="https://dordevoi.ro/MyProfile/logo.png"> 

<source src="'.$row["Media_URL"].'" type="video/mp4">

</video>



</div>';}


     if($row["Type"]=="Recorded")

            { echo '<div class="embed-responsive embed-responsive-16by9">

<video onplay="isAnythingPlaying=1;" onpause="isAnythingPlaying=0;" id="vid'.$row["Media_URL"].'" class="embed-responsive-item" controls  > 

<source src="https://dordevoi.ro/Direct/Assets/record/uploads/'.$row["Media_URL"].'.webm" type="video/mp4">
</video>
<audio id="audio'.$row["Media_URL"].'" class="embed-responsive-item" controls style="display:none">
<source src="https://dordevoi.ro/Direct/Assets/record/uploads/'.$row["Media_URL"].'.wav" type="audio/wav">
</audio>


<script>
    document.getElementById("vid'.$row["Media_URL"].'").ontimeupdate = function() {
        
        document.getElementById("audio'.$row["Media_URL"].'").currentTime = document.getElementById("vid'.$row["Media_URL"].'").currentTime;
    };
    document.getElementById("vid'.$row["Media_URL"].'").onplay = function() {
        
        document.getElementById("audio'.$row["Media_URL"].'").play()
    };
    
    document.getElementById("vid'.$row["Media_URL"].'").onpause  = function() {
        
        document.getElementById("audio'.$row["Media_URL"].'").pause()
    };
    
</script>

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

       

  /* echo '<script> $("#msg'.$row["Asset_ID"].'").click(function() {

        $("#msgname").val("'.$row["Asset_ID"].'");
        if(confirm("Doriti sa stergeti acest mesaj ? "))
{
        $("#form1").submit();

        setTimeout(myFunction, 1000);

        function myFunction() {

        

        location.reload(true);

}
}
           

       }); </script>';
       */

       

       

    }

} 

    ?>