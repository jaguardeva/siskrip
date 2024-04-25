<?php

session_start();
require_once "./database/connection.php";

if (empty($_SESSION["username"])) {
   header("Location: index.php");
}

define("SITE_NAME", "Dashboard");


?>


<?php include "./layout/top.php" ?>



<div class="sm:ml-64">
   <?php include "./layout/nav.php" ?>
   <div class="w-full p-4">
      <h1 class="font-bold text-4xl">SISTEM INFORMASI SKRIPSI</h1>
      <h1 class="text-3xl mt-2">
         Selamat Datang, <?php if (isset($_SESSION["username"])) echo $_SESSION["username"]; ?>
      </h1>
   </div>
</div>

<?php include "./layout/bottom.php" ?>