<?php
session_start();
require_once "./database/connection.php";
define("SITE_NAME", "Daftar Skripsi");


?>

<?php include "./layout/top.php" ?>

<div class="sm:ml-64">
    <?php include "./layout/nav.php" ?>
    <div class="p-5 w-full">
        <h1 class="font-bold text-lg md:text-2xl text-elephant-950">DAFTAR SKRIPSI</h1>

        <form action="./service/skripsi/add.php" method="POST" class="w-full max-w-xl flex flex-col mt-5 md:mt-2 items-center justify-center mx-auto gap-5 p-4 md:p-10 shadow-md rounded-lg bg-white">
            <h1 class="font-bold text-lg">FORM PENDAFTARAN SKRIPSI</h1>
            <div class="w-full flex flex-col gap-2">
                <label for="" class="block mb-2 text-md font-semibold text-slate-900">Topik Skripsi</label>
                <input type="text" name="topik" id="topik" placeholder="Type here!" class="bg-gray-50 border border-slate-400 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>
            <div class="w-full flex flex-col gap-2">
                <label for="" class="block mb-2 text-md font-semibold text-slate-900">Judul Skripsi</label>
                <input type="text" name="judul" id="judul" placeholder="Type here!" class="bg-gray-50 border border-slate-400 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>
            <div class="w-full flex flex-col gap-2">
                <label for="" class="block mb-2 text-md font-semibold text-slate-900">Deskripsi</label>
                <textarea class="bg-gray-50 border border-slate-400 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 resize-none h-28 p-3" placeholder="Type here!" name="desc" id="desc" cols="30" rows="10" required></textarea>
            </div>

            <button class="focus:outline-none text-white bg-elephant-600 hover:bg-elephant-700 focus:ring-4 focus:ring-elephant-700 rounded-lg text-sm px-5 py-4 me-2 mb-2 w-full transition-all duration-150 text-lg font-semibold" name="submit" type="submit" id="submit">Ajukan</button>
        </form>

    </div>
</div>

<!-- Modal Container -->

<?php include "./layout/bottom.php" ?>