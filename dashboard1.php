<?php
   include 'config.php';
   if (!isset($_SESSION['admin'])) {
       header("Location: login.php");
       exit();
   }
   ?>
   <link rel="stylesheet" type="text/css" href="style.css">
   <div class="container">
       <h2>Xush kelibsiz, <?php echo $_SESSION['admin']; ?>!</h2>
       <a href="logout.php"><button class="logout">Chiqish</button></a>
   </div>