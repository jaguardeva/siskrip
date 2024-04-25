<?php

session_start();
require_once "../database/connection.php";

if (empty($_SESSION["username"])) {
  header("Location: index.php");
}

define("SITE_NAME", "Profile");

$query = "SELECT * FROM users WHERE id = " . $_SESSION["id"];
$datas = $db->query($query);


?>


<?php include "../layout/top.php" ?>


<div class="sm:ml-64">
  <?php include "../layout/nav.php" ?>
  <div class="p-5 w-full">
    <h1 class="font-bold text-2xl text-elephant-950">PROFILE</h1>

    <div class="max-w-7xl mx-auto">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-7xl mx-auto mt-5">
        <table class="w-full text-sm text-left rtl:text-right text-black">
          <?php foreach ($datas as $data) : ?>
            <tbody>
              <tr class="odd:bg-white even:bg-gray-50 border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  Nama
                </th>
                <td class="px-6 py-4">
                  <?= $data["username"] ?>
                </td>
              </tr>
              <tr class="odd:bg-white even:bg-gray-50 border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  Email
                </th>
                <td class="px-6 py-4">
                  <?= $data["email"] ?>
                </td>
              </tr>
              <tr class="odd:bg-white even:bg-gray-50 border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  Nomor Telepon
                </th>
                <td class="px-6 py-4">
                  <?= $data["phone"] ?>
                </td>
              </tr>
              <tr class="odd:bg-white even:bg-gray-50 border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  Alamat
                </th>
                <td class="px-6 py-4">
                  <?= $data["address"] ?>
                </td>
              </tr>
              <tr class="odd:bg-white even:bg-gray-50 border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  Fakultas
                </th>
                <td class="px-6 py-4">
                  <?= $data["fakultas"] ?>
                </td>
              </tr>
              <tr class="odd:bg-white even:bg-gray-50 border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                  Program Studi
                </th>
                <td class="px-6 py-4">
                  <?= $data["prodi"] ?>
                </td>
              </tr>
            </tbody>
          <?php endforeach ?>
        </table>
      </div>
      <a href=""><button class="mt-5 focus:outline-none text-black bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Edit Data</button></a>
    </div>



  </div>
</div>



<!-- script responsive, wajib taruh di akhir -->
<?php include "../layout/bottom.php" ?>