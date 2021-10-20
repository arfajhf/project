<?php
include("../config/app.config.php");
include("../controller/regisController.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/style.css">
    <title>Business Card</title>
  </head>
  <body>
      <div class="card-wrapper">
        <div class="card">
          <div class="card-front">
            <div class="left">
              <img src="../css/images/smk.png">
              <h4><span>Perpustakaan</span><br>SMKN 1 PADAHERANG</h4>
            </div>
            <div class="right">
              <div class="person right-content">
                <i class="fas fa-user-tie"></i>
              <div>
                <h4><?=$nama ;?></h4>
                <p>Web Design</p>
                </div>
                </div>
                <div class="phone right-content">
                  <i class="fas fa-phone"></i>
                <div>
                  <p>+555 5555 5555</p>
                  <p>+333 3333 3333</p>
                  </div>
                  </div>
                  <div class="email right-content">
                    <i class="fas fa-envelope-open"></i>
                  <div>
                    <p>Johnsmith@gmail.com</p>
                    </div>
                    </div>
                    <div class="address right-content">
                      <i class="fas fa-map-marker-alt"></i>
                    <div>
                      <p>Main Street 123 </p>
                      <p>New York, NY</p>
                    </div>
                    </div>
                  </div>
                </div>
          <div class="card-back">
            <img src="../css/images/smk.png">
        </div>
      </div>
    </div>
  </body>
</html>
