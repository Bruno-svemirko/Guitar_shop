<!DOCTYPE html>
<html>
  <head>
    <title>Guitarshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
      .title-container {
        background-color: #ffa500; 
        padding: 10px;
      }
      .title {
        font-size: 36px;
        font-weight: bold;
        margin: 0;
        color: #fff; 
        display: inline-block;
      }
      .guitar-logo {
        width: 50px; 
        margin-right: 10px;
        float: left;
      }
      .strip {
        width: 100%;
        height: 5px;
        background-color: #ffa500; 
        margin-top: -5px;
      }
    </style>
  </head>
  <body>
    <div class="title-container">
      <img src="guitar-logo.png" class="guitar-logo" alt="Guitar logo">
      <div class="title">Guitarshop.com</div>
    </div>
    <div class="strip"></div>
    <h1 class="my-5" style="text-align: center;">Gitare</h1>
    <?php
      include "display_gitare.php";
    ?>
    <h1 class="my-5" style="text-align: center;">Korisnici</h1>
    <?php
      include "display_korisnike.php";
    ?>

    <h1 class="my-5" style="text-align: center;">Narudžbe</h1>
    <?php
      include "display_narudzbe.php";
    ?>
    <h1 class="my-5" style="text-align: center;">Recenzije</h1>
    <?php
      include "display_recenzije.php";
    ?>
  </body>
</html>