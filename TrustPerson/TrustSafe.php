<?php
session_start();
$servername = "localhost";
$username = "id4419779_admin";
$password = "Qerquzdwh87tV>N@f";
$dbname = "id4419779_dordevoi_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `Trusted` WHERE TrustPerson_ID = ".$_POST["TrustID"];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $imgURL = ' <img src="https://dordevoi.000webhostapp.com/SignUp/uploads/'.$row["TrustPerson_ID"].'.jpg" class="col-lg-4" style="max-width: 100%;  height:300px;">';
      $TrustName=$row["Name"];
      $email=$row["Email"];
      $phone=$row["Phone"];
      $adress=$row["Adress"];
    }
} else {
    echo "Wrong Password";
}
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
</head>
<body>

<style>
    
    html,body{
        background-color:#858789;
    }
    
</style>

<div class="container-fluid">
  <center><h1>Welcome to your Trsuted Person's safe</h1></center>
  <h2>A trusted person can access this safe after your death. You can leave them the Facebook, Google, Mail passwords, so that they can access your accounts when you will no longer be within us. They will also recieve the access keys from all the safes you created, so that they will make sure all your messages will get to the persons you love. The trusted persons will also be responsible for the Gifts you are sending, they will be contacted after your death so that we can be sure that all the data you entered for the reciever never changed</h2> 
   <div class="col-lg-12">
  <?php echo $imgURL; ?>
  <div class="col-lg-4">
      <h1>Name: </h1>
      <h1>Email: </h1>
  </div>
  </div>
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#home"><button type="button" class="btn btn-warning"><h1>Send a gift</h1></button></a></li>
    <li><a data-toggle="tab" href="#menu1"><button type="button" class="btn btn-primary"><h1>Store a Password</h1></button></a></li>
    <li><a data-toggle="tab" href="#menu2"><button type="button" class="btn btn-success"><h1>Send a Message</h1></button></a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>
 
  <div class="tab-content col-lg-6">
      
    <div id="menu1" class="tab-pane fade in active">
      <h3>HOME</h3>
      <form>
          <div class="form-group">
            <select class="form-control" id="sel1">
                     <option>-</option>
                     <option>Facebook</option>
                     <option>Google</option>
                     <option>LinkedIn</option>
                     <option>Pinterest</option>
                     <option>Twitter</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
             <input type="password" class="form-control" id="pwd">
        </div>

      </form>
    </div>
    <div id="home" class="tab-pane fade">
      <h3>Send a Gift to a dear person</h3>
     
      <form>
          <div class="form-group">
               <input type="text" class="form-control" id="usr">
          </div>
          <div class="form-group">
              <h1>Adress</h1>
             <input type="text" class="form-control">
          </div>
          
          
          <table style="width:100%"><tr style="width:100%"><td id="date" style="width:50%">
              <center>
          <div class="form-group">
              <h1>Delivery Date</h1>
             <input type="date" class="form-control">
          </div></center></td>
          <td id="period" style="width:50%">
              <center>
          <div class="form-group">
            <h1>Select time period:</h1>
            <select class="form-control" id="sel1">
                     <option>-</option>
                     <option>3 months after my death</option>
                     <option>6 months after my death</option>
                     <option>9 months after my death</option>
                     <option>1 year after my death</option>
                     <option>2 years after my death</option>
                     <option>5 years after my death</option>
            </select>
        </div></center>
        </td></tr></table>
          <div class="form-group">
             <label for="comment">Comment:</label>
             <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
      </form>
    </div>
    <div id="menu2" class="tab-pane fade">
      <div class="form-group">
             <label for="comment">Comment:</label>
             <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
  <div class="tab-content col-lg-6">
      hello
  </div>
</div>

</body>
</html>