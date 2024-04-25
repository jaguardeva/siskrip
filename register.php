<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <!-- registration start -->
  <section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
      <!-- bagian kiri halaman -->
      <div class="relative flex h-32 items-end bg-teal-900 lg:col-span-5 lg:h-full xl:col-span-6">
        <img alt="Night" src="./assets/image/upn_11.jpeg" loading="lazy" class="absolute inset-0 h-full w-full object-cover opacity-20" />

        <div class="hidden lg:relative lg:block lg:p-12">
          <a class="text-center block text-white w-fit" href="index.php">← Home</a>

          <a class="text-center block text-white" href="/"><span class="sr-only">Home</span></a>

          <h2 class="text-center mt-4 text-2xl font-bold text-white sm:text-3xl md:text-4xl">Pusat Skripsi</h2>

          <p class="text-center mt-4 leading-relaxed text-white">UPN VETERAN JAWA TIMUR</p>
        </div>

        <div class="z-50 mb-5 ml-5 block lg:hidden">
          <a href="./index.php" class="text-white font-semibold">Kembali</a>
        </div>
      </div>

      <!-- bagian kanan halaman dan form input -->
      <main class="flex items-center justify-center bg-gray-200 px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
        <div class="max-w-xl lg:max-w-3xl">
          <!-- alert error-->

          <form action="./service/register.php" method="POST">
            <!-- nama -->
            <div class="flex flex-col gap-2">
              <div>

                <label for="" class="block text-sm font-medium text-gray-700">Nama</label>
                <input required type="text" class="mt-1 w-full p-2 rounded-md border-gray-200 bg-neutral-100 text-sm text-gray-700 shadow-md" name="name" value="" />
              </div>

              <!-- email -->
              <div class="col-span-6 sm:col-span-3">
                <label for="" class="block text-sm font-medium text-gray-700">Email</label>
                <input required type="email" class="mt-1 w-full p-2 rounded-md border-gray-200 bg-neutral-100 text-sm text-gray-700 shadow-md" name="email" value="">
              </div>

              <!-- nomor -->
              <div class="col-span-6 sm:col-span-3">
                <label for="" class="block text-sm font-medium text-gray-700">Telepon</label>
                <input required type="text" class="mt-1 w-full p-2 rounded-md border-gray-200 bg-neutral-100 text-sm text-gray-700 shadow-md" name="phone" value="">
              </div>

              <!-- alamat -->
              <div class="col-span-6">
                <label for="" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea class="resize-none mt-1 w-full p-2 rounded-md border-gray-200 bg-neutral-100 text-sm text-gray-700 shadow-md" name="address"></textarea>
              </div>

              <!-- fakultas -->
              <div class="col-span-6 sm:col-span-2">
                <label for="" class="block text-sm font-medium text-gray-700">Fakultas</label>
                <input required type="text" class="mt-1 w-full p-2 rounded-md border-gray-200 bg-neutral-100 text-sm text-gray-700 shadow-md" name="fakultas" value="">
              </div>

              <!-- prodi -->
              <div class="col-span-6 sm:col-span-2">
                <label for="" class="block text-sm font-medium text-gray-700">Program Studi</label>
                <input required type="text" class="mt-1 w-full p-2 rounded-md border-gray-200 bg-neutral-100 text-sm text-gray-700 shadow-md" name="prodi" value="">
              </div>
              <!-- password -->
              <div class="col-span-6 sm:col-span-3">
                <label for="" class="block text-sm font-medium text-gray-700">Password</label>
                <input required type="password" class="mt-1 w-full p-2 rounded-md border-gray-200 bg-neutral-100 text-sm text-gray-700 shadow-md" name="password">
              </div>

              <!-- konfirmasi password -->
              <div class="col-span-6 sm:col-span-3">
                <label for="" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                <input required type="password" class="mt-1 w-full p-2 rounded-md border-gray-200 bg-neutral-100 text-sm text-gray-700 shadow-md" name="confirm_password">
              </div>

              <div class="col-span-6">
                <p class="text-sm text-gray-500">
                  Dengan membuat akun ini, kamu menyetujui syarat & ketentuan kami
                </p>
              </div>

              <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                <button type="submit" name="register" class="px-7 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-all duration-100">Daftar</button>
                <p class="mt-4 text-sm text-gray-500 sm:mt-0">Sudah punya akun?
                  <a href="./login.php" class="text-gray-700 underline">Masuk</a>.
                </p>
              </div>
          </form>
        </div>
      </main>
    </div>
  </section>
  <!-- registration end -->
</body>

</html>