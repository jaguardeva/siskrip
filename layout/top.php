<?php

$currentPage = basename($_SERVER['PHP_SELF']);



?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          backgroundImage: {
            "upn": "url('../assets/image/upn_11.jpeg')",
          },
          colors: {
            'primary': '#153448',
            'secondary': '#f8fafc',
            'elephant': {
              '50': '#f2f9fd',
              '100': '#e5f1f9',
              '200': '#c5e3f2',
              '300': '#91cde8',
              '400': '#56b2da',
              '500': '#3199c6',
              '600': '#217ba8',
              '700': '#1c6388',
              '800': '#1b5471',
              '900': '#1c475e',
              '950': '#153448',
            },
          }
        },
      }
    }
  </script>
  <title><?php echo SITE_NAME ?> | Sistem Pendaftaran Skripsi</title>

</head>

<body class="bg-[#eee]">


  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-3 transition-transform -translate-x-full bg-elephant-950 sm:translate-x-0 shadow-lg" aria-label="Sidebar">


    <div class="h-full px-3 pb-4 overflow-y-auto bg-elephant-950 shadow-lg">
      <a href="../index.php" class="flex ms-2 md:me-24">
        <img src="../assets/image/logo.png" class="h-8 me-3" alt="FlowBite Logo" />
        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">SISKRIP UPN</span>
      </a>

      <ul class="space-y-2 font-medium mt-10">

        <!-- Mahasiswa & Dosen Button -->

        <?php if (empty($_SESSION["id"])) { ?>
          <li>
            <a href="../login.php" class="flex items-center p-2 hover:text-black rounded-lg text-white hover:bg-gray-100">
              <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
            </a>
          </li>
          <li>
            <a href="../register.php" class="flex items-center p-2 hover:text-black rounded-lg text-white hover:bg-gray-100">
              <svg class="flex-shrink-0 w-5 h-5 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
            </a>
          </li>
          <li>
            <a href="../ketentuan.php" class="flex items-center p-2 hover:text-black rounded-lg text-white hover:bg-gray-100">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z" clip-rule="evenodd" />
              </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Syarat & Ketentuan</span>
            </a>
          </li>
        <?php } ?>
        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] !== "admin") { ?>
          <li>
            <a href="../dashboard.php" class="flex items-center p-2 hover:text-black rounded-lg hover:bg-gray-100 <?= $currentPage === 'dashboard.php' ? "text-black bg-gray-100" : "text-white" ?> ">
              <svg class="w-5 h-5  transition duration-75 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
              </svg>
              <span class="ms-3">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="../daftar_skripsi.php" class="flex items-center p-2 hover:text-black rounded-lg hover:bg-gray-100  <?= $currentPage === 'daftar_skripsi.php' ? "text-black bg-gray-100" : "text-white" ?>">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
              </svg>

              <span class="flex-1 ms-3 whitespace-nowrap">Daftar Skripsi</span>
            </a>
          </li>
          <li>
            <a href="../daftar_ajuan.php" class="flex items-center p-2 hover:text-black rounded-lg hover:bg-gray-100  <?= $currentPage === 'daftar_ajuan.php' ? "text-black bg-gray-100" : "text-white" ?>">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z" clip-rule="evenodd" />
              </svg>

              <span class="flex-1 ms-3 whitespace-nowrap">Daftar Ajuan</span>

            </a>
          </li>
          <li>
            <a href="../profile/index.php" class="flex items-center p-2 hover:text-black rounded-lg hover:bg-gray-100  <?= $currentPage === 'index.php' ? "text-black bg-gray-100" : "text-white" ?>">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm10 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-8-5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm1.942 4a3 3 0 0 0-2.847 2.051l-.044.133-.004.012c-.042.126-.055.167-.042.195.006.013.02.023.038.039.032.025.08.064.146.155A1 1 0 0 0 6 17h6a1 1 0 0 0 .811-.415.713.713 0 0 1 .146-.155c.019-.016.031-.026.038-.04.014-.027 0-.068-.042-.194l-.004-.012-.044-.133A3 3 0 0 0 10.059 14H7.942Z" clip-rule="evenodd" />
              </svg>

              <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
            </a>
          </li>

        <?php } ?>


        <!-- Admin Button -->

        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") { ?>

          <li>
            <a href="../dashboard.php" class="flex items-center p-2 hover:text-black rounded-lg hover:bg-gray-100 <?= $currentPage === 'dashboard.php' ? "text-black bg-gray-100" : "text-white" ?> ">
              <svg class="w-5 h-5  transition duration-75 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
              </svg>
              <span class="ms-3">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="../admin/mahasiswa.php" class="flex items-center p-2 hover:text-black rounded-lg hover:bg-gray-100 <?= $currentPage === 'mahasiswa.php' ? "text-black bg-gray-100" : "text-white" ?> ">
              <i class="fa-solid fa-graduation-cap"></i>
              <span class="ms-3">Data Mahasiswa</span>
            </a>
          </li>
          <li>
            <a href="../admin/dosen.php" class="flex items-center p-2 hover:text-black rounded-lg hover:bg-gray-100 <?= $currentPage === 'dosen.php' ? "text-black bg-gray-100" : "text-white" ?> ">
              <i class="fa-solid fa-chalkboard-user"></i>
              <span class="ms-3">Data Dosen</span>
            </a>
          </li>

        <?php } ?>

        <!-- Logout Button -->

        <?php
        if (isset($_SESSION["username"])) { ?>
          <li>
            <a href="../service/logout.php" class="flex items-center p-2 hover:text-black rounded-lg text-white hover:bg-gray-100 ">
              <svg height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 320.002 320.002" xml:space="preserve" fill="currentColor">
                <g id="XMLID_6_">
                  <path id="XMLID_7_" d="M51.213,175.001h173.785c8.284,0,15-6.716,15-15c0-8.284-6.716-15-15-15H51.213l19.394-19.394
		c5.858-5.858,5.858-15.355,0-21.213c-5.857-5.858-15.355-5.858-21.213,0L4.396,149.393c-0.351,0.351-0.683,0.719-0.997,1.103
		c-0.137,0.167-0.256,0.344-0.385,0.515c-0.165,0.22-0.335,0.435-0.488,0.664c-0.14,0.209-0.261,0.426-0.389,0.64
		c-0.123,0.206-0.252,0.407-0.365,0.619c-0.118,0.22-0.217,0.446-0.323,0.67c-0.104,0.219-0.213,0.435-0.306,0.659
		c-0.09,0.219-0.164,0.442-0.243,0.664c-0.087,0.24-0.179,0.477-0.253,0.722c-0.067,0.222-0.116,0.447-0.172,0.672
		c-0.063,0.249-0.133,0.497-0.183,0.751c-0.051,0.259-0.082,0.521-0.119,0.782c-0.032,0.223-0.075,0.443-0.097,0.669
		c-0.048,0.484-0.073,0.971-0.074,1.457c0,0.007-0.001,0.015-0.001,0.022c0,0.007,0.001,0.015,0.001,0.022
		c0.001,0.487,0.026,0.973,0.074,1.458c0.022,0.223,0.064,0.44,0.095,0.661c0.038,0.264,0.069,0.528,0.121,0.79
		c0.05,0.252,0.119,0.496,0.182,0.743c0.057,0.227,0.107,0.456,0.175,0.681c0.073,0.241,0.164,0.474,0.248,0.71
		c0.081,0.226,0.155,0.453,0.247,0.675c0.091,0.22,0.198,0.431,0.3,0.646c0.108,0.229,0.21,0.46,0.33,0.685
		c0.11,0.205,0.235,0.4,0.354,0.599c0.131,0.221,0.256,0.444,0.4,0.659c0.146,0.219,0.309,0.424,0.466,0.635
		c0.136,0.181,0.262,0.368,0.407,0.544c0.299,0.364,0.616,0.713,0.947,1.048c0.016,0.016,0.029,0.034,0.045,0.05l45,45.001
		c2.93,2.929,6.768,4.394,10.607,4.394c3.838-0.001,7.678-1.465,10.606-4.393c5.858-5.858,5.858-15.355,0.001-21.213L51.213,175.001
		z" />
                  <path id="XMLID_8_" d="M305.002,25h-190c-8.284,0-15,6.716-15,15v60c0,8.284,6.716,15,15,15s15-6.716,15-15V55h160v210.001h-160
		v-45.001c0-8.284-6.716-15-15-15s-15,6.716-15,15v60.001c0,8.284,6.716,15,15,15h190c8.284,0,15-6.716,15-15V40
		C320.002,31.716,313.286,25,305.002,25z" />
                </g>
              </svg>

              <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </aside>