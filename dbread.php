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

else { echo "Connected to mysql database. <br>"; }


// Select values from MySQL database table

$sql = "SELECT Water_flowrate, WaterVol, Flatno FROM userinfo";  // Update your tablename here

$result = $conn->query($sql);

echo "<center>";



if ($result->num_rows > 0) {


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<strong> Flat number:</strong> " . $row["Flatno"]. " &nbsp <strong>Water Flow rate:</strong> " . $row["Water_flowrate"]. "<p>";
    


}
} else {
    echo "0 results";
}

echo "</center>";

$conn->close();



?>
