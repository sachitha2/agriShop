<?php

require_once('dataBase.php');
    require_once('Main.class.php');
    require_once("db.php");

    $main = new Main; 
    
     $DB = new DB;

     $DB->conn = $conn;

     ?>


<!doctype html>
<html lang="en">
    <?php require_once('assets/header.php') ?>

    <!-- Begin page content -->
    <main role="main" class="container">


      <h1 class="mt-5">OUR PRODUCTS</h1>
      <!-- <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p> -->
      <!-- <p>Back to <a href="../sticky-footer/">the default sticky footer</a> minus the navbar.</p> -->
    
    </main>



    <?php require_once('assets/footer.php') ?>
  </body>
</html>
