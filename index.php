<?php

session_start();
if (isset($_SESSION["email"])) {
   header("Location: ./dashboard.php");
}

define("SITE_NAME", "Selamat Datang");

?>

<?php include "./layout/top.php" ?>

<div class="sm:ml-64">
   <?php include "./layout/nav.php" ?>
   <div class="w-full p-4 h-[calc(100vh-56px)]">
      <div class="flex justify-center items-center w-full h-full">
         <div class="flex flex-col items-center">
            <img src="./assets/image/logo.png" alt="logo.upn" class="w-[200px]">
            <h1 class="text-3xl font-semibold mt-4 text-center">Selamat Datang di</h1>
            <h1 class="text-3xl font-semibold mt-4 text-center">SISTEM INFORMASI PENDAFTARAN SKRIPSI</h1>
         </div>

      </div>
   </div>
</div>


<?php include "./layout/bottom.php" ?>