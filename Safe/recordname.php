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
                
                $id=$_POST["id"];
                $name=$_POST["fname"];
                
                
                
                $sql = 'INSERT INTO `Assets`(`Type`,`Media_URL`, `Date_Available` ,`SafeID`) VALUES ("Recorded","'.$name.'" ,"'.$_POST["date"].'","'.$id.'")';
                
                
                
                
                
                if ($conn->query($sql) === TRUE) {
                        echo "ok";
                     }
                     echo '<script>
                        window.close();

                     </script>';
?>