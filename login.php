<!-- component -->
<!-- component -->

<?php
session_start();

if (isset($_SESSION["email"])) {
  header("Location: ./dashboard.php");
}
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
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
</head>

<body>
  <div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
    <div class="p-4 mx-auto w-full md:max-w-md">
      <h1 class="font-bold text-center text-2xl mb-5">Login Student</h1>
      <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
        <form action="./service/login.php" method="POST" class="px-5 py-7">
          <label class="font-semibold text-sm text-gray-600 pb-1 block">E-mail</label>
          <input type="email" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" name="username" placeholder="Username" />
          <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
          <input type="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" name="password" placeholder="********" />
          <p class="text-red-500 text-center mb-2"><?php if (isset($_GET["message"])) echo $_GET["message"]; ?></p>
          <button type="submit" name="login" class="transition duration-200 bg-elephant-600 hover:bg-elephant-700 focus:bg-elephant-800 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
            <span class="inline-block mr-2">Login</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </button>
          <div class="flex justify-between mt-4">
            <a href="./index.php" class="text-sm text-blue-500 hover:underline">Kembali ke Home</a>
            <a href="./register.php" class="text-sm text-blue-500 hover:underline">Buat Akun</a>
          </div>
          </button>
          </button>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>