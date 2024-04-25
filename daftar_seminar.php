<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Daftar Seminar</title>
</head>

<body class="bg-white">


  <!-- sidebar start -->
  <!-- hanya kode side bar -->
  <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 hover:bg-teal-600 focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
  </button>

  <?php include "./layout/aside.php" ?>

  <div class="flex items-center justify-between p-4">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
  </div>
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="mx-auto w-full max-w-[550px]">
    <div x-data="{ showModal: true }"> <!-- Ubah showModal menjadi true -->
      <!-- Modal -->
      <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <!-- Background element, show/hide based on modal state. Entering: "ease-out duration-300" From: "opacity-0" To: "opacity-100" Leaving: "ease-in duration-200" From: "opacity-100" To: "opacity-0" -->
          <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
          </div>
          <!-- This element is to trick the browser into centering the modal contents. -->
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
          <!-- Modal panel, show/hide based on modal state. Entering: "ease-out duration-300" From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" To: "opacity-100 translate-y-0 sm:scale-100" Leaving: "ease-in duration-200" From: "opacity-100 translate-y-0 sm:scale-100" To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" -->
          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    Daftar Seminar
                  </h3>
                  <div class="mt-2">
                    <form action="https://formbold.com/s/FORM_ID" method="POST">
                      <div class="mb-5">
                        <div class="mb-5">
                          <label for="guest" class="mb-3 block text-base font-normal text-[#07074D]">
                            Surat permohonan seminar Tugas Akhir (TA)
                          </label>
                          <input type="file" name="guest" id="guest" placeholder="5" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-sm text-[#6B7280] outline-none focus:border-[#664229] focus:shadow-md" />

                        </div>

                        <div class="mb-5">
                          <label for="guest" class="mb-3 block text-base font-normal text-[#07074D]">
                            Laporan
                          </label>
                          <div class="mb-5">

                            <input type="file" name="guest" id="guest" placeholder="5" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-sm text-[#6B7280] outline-none focus:border-[#664229] focus:shadow-md" />
                            <!-- Tambah keterangan di bawah input file -->
                            <p class="text-sm text-gray-500 mt-1">Pastikan kelengkapan laporan yang meliputi Cover, Lembar Pengesahan, Abstrak, dan Lembar Konsultasi.</p>
                          </div>


                        </div>

                        <div class="mb-5">
                          <label for="guest" class="mb-3 block text-base font-normal text-[#07074D]">
                            Kartu bimbingan seminar proposal TA
                          </label>
                          <input type="file" name="guest" id="guest" placeholder="5" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-sm text-[#6B7280] outline-none focus:border-[#664229] focus:shadow-md" />

                        </div>

                        <div class="mb-5">
                          <label for="guest" class="mb-3 block text-base font-normal text-[#07074D]">
                            Surat PKL
                          </label>
                          <input type="file" name="guest" id="guest" placeholder="5" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-sm text-[#6B7280] outline-none focus:border-[#664229] focus:shadow-md" />

                        </div>

                        <div class="mb-5">
                          <label for="guest" class="mb-3 block text-base font-normal text-[#07074D]">
                            Scan KRS yang menunjukkan MK Tugas Akhir
                          </label>
                          <input type="file" name="guest" id="guest" placeholder="5" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-sm text-[#6B7280] outline-none focus:border-[#664229] focus:shadow-md" />

                        </div>


                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
              <button @click="showModal = false" type="button" class="hover:shadow-form w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-teal-900 text-base font-medium text-white hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                Tambah
              </button>
              <button @click="showModal = false" type="button" class="hover:shadow-form mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Batal
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelector('[x-data]').__x.$data.showModal = true;
    });
  </script>
</body>

</html>