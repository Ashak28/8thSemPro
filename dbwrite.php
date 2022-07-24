<?php



$host = "localhost";		         
$dbname = "id19082125_userinfo";              
$usernamedb = "id19082125_ashvin";		
$passworddb = "apxyIP7hOSi{@T#j";


// Establish connection to MySQL database
$conn = new mysqli($host, $usernamedb, $passworddb, $dbname);


// Check if connection established successfully
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo "Connected to mysql database. "; }

    
// If values send by NodeMCU are not empty then insert into MySQL database table

  if(!empty($_POST['sendval']) && !empty($_POST['sendval2']) )
    {
		$val = $_POST['sendval'];
        $val2 = $_POST['sendval2'];
        $fno = $_POST['Flatno'];


// Update your tablename here
	    $sql = "UPDATE userinfo SET Water_flowrate='$val',WaterVol='$val2' WHERE Flatno='$fno'"; 
 


		if ($conn->query($sql) === TRUE) {
		    echo "Values inserted in MySQL database table.";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


// Close MySQL connection
$conn->close();



?>
