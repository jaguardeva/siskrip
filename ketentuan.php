<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Ketentuan Skripsi</title>
  <style>
    .produk {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    footer {
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header>
    <nav class="shadow">
      <div class="flex justify-between items-center py-6 px-10 container mx-auto">
        <div>
          <a href="/" class="text-2xl font-bold bg-gradient-to-tr from-indigo-600 to-green-600 bg-clip-text text-transparent hover:cursor-pointer">Pusat Skripsi</a>
        </div>
        <div>
          <div class="hover:cursor-pointer sm:hidden">
            <span class="h-1 rounded-full block w-8 mb-1 bg-gradient-to-tr from-indigo-600 to-green-600"></span>
            <span class="h-1 rounded-full block w-8 mb-1 bg-gradient-to-tr from-indigo-600 to-green-600"></span>
            <span class="h-1 rounded-full block w-8 mb-1 bg-gradient-to-tr from-indigo-600 to-green-600"></span>
          </div>
          <div class="flex items-center">
            <a href="./login.php" class="text-text-gray-600 py-2 hover:cursor-pointer px-4 rounded text-white bg-teal-900 from-indigo-600 to-green-600 hover:shadow-lg">LOGIN</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- About Us Section -->
  <section class="bg-gray-100 py-20">
    <div class="container mx-auto px-4">
      <div class="flex flex-col items-center">
        <h2 class="text-3xl font-semibold mb-4">Syarat Pendaftaran Skripsi</h2>
        <p class="text-lg text-center mb-8">Bagi mahasiswa yang ingin melakukan pendaftaran skripsi mohon diperhatikan syarat dan ketentuan berikut:</p>


        <ul class="list-disc text-lg text-left mb-8">
          <li>Menyelesaikan semua mata kuliah yang diperlukan sesuai kurikulum.</li>
          <li>Memiliki poin SKPM sesuai dengan ketentuan minimal yaitu 150 poin.</li>
          <li>Menyelesaikan pembayaran administratif selama semester berjalan.</li>
          <li>Memilih topik skripsi yang relevan dan disetujui oleh dosen pembimbing.</li>
          <li>Memenuhi persyaratan administratif seperti jadwal pengumpulan, penilaian, dan ujian skripsi.</li>
          <li>Menjaga integritas akademik dengan menghindari plagiarisme dan mencantumkan refrensi dengan benar.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-teal-900 text-white py-10">
    <div class="container mx-auto px-10 flex flex-col items-center">
      <p class="text-lg leading-relaxed text-center mb-8">UPN VETERAN JAWA TIMUR</p>
    </div>
  </footer>

</body>

</html>