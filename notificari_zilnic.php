<?PHP

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


//functia care trimite notificari la telefoanele utilizatorilor

	function sendMessage($x){
		$content = array(
			"en" => 'Aveti un mesaj nou disponibil'
			);
		
		$fields = array(
			'app_id' => "e25d5902-1f3b-401b-a221-39759185a2c0",
			'include_player_ids' => array($x),
			'data' => array("foo" => "bar"),
			'contents' => $content
		);
		
		$fields = json_encode($fields);
    	print("\nJSON sent:\n");
    	print($fields);
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
												   'Authorization: Basic NGEwMGZmMjItY2NkNy0xMWUzLTk5ZDUtMDAwYzI5NDBlNjJj'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
		
		return $response;
	}
	
	//extrage din baza de date mesajele ce au data de livrare "astazi"
	
	$sql = "SELECT * FROM `Assets` 
	        LEFT JOIN Devices 
	        ON Assets.SafeID = Devices.SafeID 
	        WHERE Devices.DeviceID IS NOT NULL";
	        
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($row["Date_Available"] == date("Y-m-d")) {
                        $response = sendMessage($row["DeviceID"]); //trimite mesaj la fiecare
                    	$return["allresponses"] = $response;
                    	$return = json_encode( $return);
                        }
        }
    } else {
        echo "Nici un mesaj nu are data de livrare astazi";
    }
    $conn->close();
    

/*	$response = sendMessage("fe6b781e-d11f-4c0c-ac86-a02191d0e24e");
	$return["allresponses"] = $response;
	$return = json_encode( $return);
*/	
	print("\n\nJSON received:\n");
	print($return);
	print("\n");
?>