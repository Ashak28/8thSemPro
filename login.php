<?php

$host = "localhost";		         // host = localhost because database hosted on the same server where PHP files are hosted
$dbname = "id19082125_userinfo";              // Database name
$usernamedb = "id19082125_ashvin";		// Database username
$passworddb = "apxyIP7hOSi{@T#j";

if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $connection=mysqli_connect($host,$usernamedb,$passworddb,$dbname);

    $email_verify_query="SELECT * FROM userinfo WHERE Email='$email'" ;

    $verify_email=mysqli_query($connection,$email_verify_query);

    while($row = mysqli_fetch_assoc($verify_email)){
        if($row['Email']==$email && $row['Password']==$pass){
            $name=$row['Firstname']." ".$row['Lastname'];
            echo "Welcome $name";
            $fno=$row['Flatno'];
            $flow=$row['Water_flowrate'];
            $vol=$row['WaterVol'];
            echo "Flat number: " . $row['Flatno']. "Water Flow rate: " . $row['Water_flowrate']. "Total water consumed: ".$row['WaterVol']." ";
        }

        else{
            echo"Wrong email or password";
        }
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Merriweather+Sans&family=Montserrat:wght@400;700&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <title>USer Page</title>
</head>
<body>
    <section class="header">
        <nav class='navbar sticky-top navbar-expand-lg navbar-dark'>
            <a class="navbar-brand" href="#">
                <img src="favicon.ico" width="30" height="30" alt="">
            </a>
            <a id="logo" class='navbar-brand' href='index.html'>WUSBS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarTogglerDemo01'>
              <ul class='navbar-nav ms-auto'>
                  <li class='nav-item'>
                      <a class='nav-link' href='about.html'>About Us</a>
                  </li>
              </ul>
            </div>
        </nav>
    </section>
    <section class="cmrit">
        <div>
            <img src="cmrit_logo.png" alt="cmrit_logo" id="logo1">
            <img src="vtu_logo.png" alt="vtu_logo">
        </div>
    </section>
    <section class="content">
        <?php
            echo"<h2>Welcome $name</h2>";
            echo ""
        ?>
    </section>
    <section class="content2">
        <?php
            $bill=$vol/20;
            echo"<h3>Flat number: $fno<br>Water consumed: $vol ml<br>Bill charged: $bill</h3>";
        ?>
    </section>
</body>
</html>