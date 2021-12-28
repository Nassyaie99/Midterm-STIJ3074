<?php

include_once("dbconnect.php");

$sqldata = "SELECT * FROM `room` ORDER BY id DESC";
 $stmt = $conn->prepare($sqldata);
 $stmt->execute();
 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 $rows = $stmt->fetchAll();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="../javascript/script.js"></script>
    <title>Rent A Room</title>
</head>

<body>
<div class="w3-panel">
<span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">RENT A ROOM</span>
  <p></p>
</div>
<div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="img/1.JPG" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">MANY OPTIONS TO CHOOSE</span>
      </div>
    </div>

    <div class="w3-header w3-container w3-black w3-padding-32 w3-center">
        <h1 style="font-size:calc(8px + 4vw);">Rent A Room</h1>
        <p style="font-size:calc(8px + 1vw);;">We Can Serve You Better</p>
    </div>


    <div class="w3-card w3-container w3-padding w3-margin w3-round">
        <h4>Tenant Search</h4>
        <form action="mainpage.php">
            <div class="w3-row">
                <div class="w3-half w3-container">
                    <p><input class="w3-input w3-block w3-round w3-border" type="search" id="idsearch" name="search" placeholder="Enter search term" /></p>
                </div>
                <div class="w3-half w3-container">
                    <p><select class="w3-input w3-block w3-round w3-border" name="option" id="srcid">
                            <option value="name">By Name</option>
                            <option value="ic">By IC</option>
                            <option value="today">Today</option>
                        </select>
                    <p>
                </div>
            </div>
            <div class="w3-container">
                <p><button class="w3-button w3-black w3-round w3-right" type="submit" name="button" value="search">search</button></p>
            </div>

        </form>
    </div>

    <div class="w3-grid-template">
        <?php
        foreach ($rows as $Tenant) {
            $id = $Tenant['id'];
            $contact = $Tenant['contact'];
            $title = $Tenant['title'];
            $description = $Tenant['description'];
            $price = $Tenant['price'];
            $deposit = $Tenant['deposit'];
            $area = $Tenant['area'];
            $state = $Tenant['state'];
            $date_created = $Tenant['date_created'];
            $latitude = $Tenant['latitude'];
            $longitude = $Tenant['longitude'];
            
            echo "<div class='w3-center w3-padding'>";
            echo "<div class='w3-card-4 w3-dark-grey'>";
            echo "<header class='w3-container w3-black'";
            echo "<h5>$id</h5>";
            echo "</header>";
            echo "<div class='w3-padding'><img class='w3-image' src=../res/images/$id.png" .
                " onerror=this.onerror=null;this.src='../res/images/profile.png'"
                . " '></div>";
            echo "<div class='w3-container w3-left-align'><hr>";
            echo "<p><i class='fa fa-id-card' style='font-size:16px'></i> 
            &nbsp&nbsp$id<br>
            <i class='fa fa-phone' style='font-size:16px'>
            </i>&nbsp&nbsp&nbsp&nbsp$contact<br>
            <i class='fa fa-flag' style='font-size:16px'></i>
             &nbsp&nbsp$title<br></p><hr>
             <i class='fa fa-flag' style='font-size:16px'></i>
             &nbsp&nbsp$description<br></p><hr>
             <i class='fa fa-money' style='font-size:16px'></i>
             &nbsp&nbsp$price<br></p><hr>
             <i class='fa fa-money' style='font-size:16px'></i>
             &nbsp&nbsp$deposit<br></p><hr>
             <i class='fa fa-map' style='font-size:16px'></i>
             &nbsp&nbsp$state<br></p><hr>
             <i class='fa fa-map' style='font-size:16px'></i>
             &nbsp&nbsp$area<br></p><hr>
             <i class='fa fa-calendar' style='font-size:16px'></i>
             &nbsp&nbsp$date_created<br></p><hr>
             <i class='fa fa-globe' style='font-size:16px'></i>
             &nbsp&nbsp$latitude<br></p><hr>
             <i class='fa fa-globe' style='font-size:16px'></i>
             &nbsp&nbsp$longitude<br></p><hr>";


            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    

  

</body>

</html>