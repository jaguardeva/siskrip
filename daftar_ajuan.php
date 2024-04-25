<?php
session_start();
define("SITE_NAME", "Daftar Ajuan");

require_once "./database/connection.php";

$query = "SELECT * FROM skripsi WHERE mahasiswa = " . $_SESSION["id"];
$datas = $db->query($query);

?>

<?php include "./layout/top.php" ?>

<div class="sm:ml-64">
  <?php include "./layout/nav.php" ?>
  <div class="p-5 w-full">
    <h1 class="font-bold text-lg md:text-2xl text-elephant-950">DAFTAR AJUAN</h1>



    <div class="relative overflow-x-auto mt-5 md:mt-0 md:pt-5">
      <table class="w-full text-sm text-left rtl:text-right">
        <thead class="text-xs uppercase bg-elephant-600 text-white ">
          <tr>
            <th scope="col" class="px-6 py-3">
              No.
            </th>
            <th scope="col" class="px-6 py-3">
              Judul
            </th>
            <th scope="col" class="px-6 py-3">
              Topik
            </th>
            <th scope="col" class="px-6 py-3">
              Deskripsi
            </th>
            <th scope="col" class="px-6 py-3 w-[180px]">
              Terakhir Diubah
            </th>
            <th scope="col" class="px-6 py-3">
              Status
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
                <?= $data["judul"] ?>
              </td>
              <td class="px-6 py-4">
                <?= $data["topict"] ?>
              </td>
              <td class="px-6 py-4">
                <?= $data["deskripsi"] ?>
              </td>
              <td class="px-6 py-4">
                <?= $data["updated_at"] ?>
              </td>
              <td class="px-6 py-4">
                <?php if ($data["status"] === NULL) { ?>
                  <p class="text-black bg-yellow-400 py-2 text-center rounded-lg font-bold w-[90px]">Diajukan</p>
                <?php } else if ($data["status"] === "0") { ?>
                  <p class="text-white bg-red-700 py-2 text-center rounded-lg font-bold w-[90px]">Ditolak</p>
                <?php } else { ?>
                  <p class="text-white bg-green-700 py-2 text-center rounded-lg font-bold w-[90px]">Diterima</p>
                <?php } ?>
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
      <?php if ($datas->num_rows === 0) { ?>
        <p class='text-center my-10'>Belum ada yang diajukan!</p>
      <?php } ?>
    </div>


  </div>
</div>

<!-- Modal Container -->

<?php include "./layout/bottom.php" ?>