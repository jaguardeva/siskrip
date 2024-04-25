<?php

session_start();
require_once "../database/connection.php";

if (empty($_SESSION["username"])) {
  header("Location: index.php");
}

define("SITE_NAME", "Mahasiswa");

$query = "SELECT * FROM users WHERE role = 'mahasiswa'";
$datas = $db->query($query);


?>


<?php include "../layout/top.php" ?>



<div class="sm:ml-64">
  <?php include "../layout/nav.php" ?>
  <div class="w-full p-4">
    <h1 class="font-bold text-2xl text-elephant-950">Halaman Data Mahasiswa</h1>
    <div class="relative overflow-x-auto mt-5 md:mt-0 md:pt-5">

      <table class="w-full text-sm text-left rtl:text-right">
        <thead class="text-xs uppercase bg-elephant-600 text-white ">
          <tr>
            <th scope="col" class="px-6 py-3">
              No.
            </th>
            <th scope="col" class="px-6 py-3">
              Nama
            </th>
            <th scope="col" class="px-6 py-3">
              email
            </th>
            <th scope="col" class="px-6 py-3">
              alamat
            </th>
            <th scope="col" class="px-6 py-3">
              Nomor Telepon
            </th>
            <th scope="col" class="px-6 py-3">
              Fakultas
            </th>
            <th scope="col" class="px-6 py-3">
              Program Studi
            </th>
            <th scope="col" class="px-6 py-3">
              Action
            </th>
          </tr>
        </thead>
        <tbody class="text-black">
          <?php $i = 1;
          foreach ($datas as $data) : ?>
            <tr class="bg-white border-b">

              <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                <?= $i++ ?>
              </th>
              <td class="px-6 py-4">
                <?= $data["username"] ?>
              </td>
              <td class="px-6 py-4">
                <?= $data["email"] ?>
              </td>
              <td class="px-6 py-4">
                <?= $data["address"] ?>
              </td>
              <td class="px-6 py-4">
                <?= $data["phone"] ?>
              </td>
              <td class="px-6 py-4">
                <?= $data["fakultas"] ?>
              </td>
              <td class="px-6 py-4">
                <?= $data["prodi"] ?>
              </td>
              <td class="px-6 py-4">
                <div class="flex gap-2">
                  <button class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2.5 py-2.5 justify-center item-center" title="Edit"><svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M14 4.182A4.136 4.136 0 0 1 16.9 3c1.087 0 2.13.425 2.899 1.182A4.01 4.01 0 0 1 21 7.037c0 1.068-.43 2.092-1.194 2.849L18.5 11.214l-5.8-5.71 1.287-1.31.012-.012Zm-2.717 2.763L6.186 12.13l2.175 2.141 5.063-5.218-2.141-2.108Zm-6.25 6.886-1.98 5.849a.992.992 0 0 0 .245 1.026 1.03 1.03 0 0 0 1.043.242L10.282 19l-5.25-5.168Zm6.954 4.01 5.096-5.186-2.218-2.183-5.063 5.218 2.185 2.15Z" clip-rule="evenodd" />
                    </svg>
                  </button>
                  <button class="text-white focus:outline-none bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2.5 py-2.5  " title="Delete"><svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>

              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include "../layout/bottom.php" ?>