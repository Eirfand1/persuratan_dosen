<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="bg-indigo-800 flex justify-center align-center p-2">
      <h1 class="text-2xl text-white font-semibold">SI-Saren</h1>
   </div>
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800 ">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 hover:bg-gray-700 group">
               <svg class="w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3 text-sm">Dashboard</span>
            </a>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2 text-sm transition duration-75 rounded-lg group text-white hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
              <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                     <path d="M12 1L1 6l11 5 11-5-11-5ZM3.17 8.67l7.83 3.35 7.83-3.35-7.83-3.35L3.17 8.67ZM1.92 10.06c.12.39.39.75.78.95 2.08 1.05 5.42 2.42 6.82 3.08v3.91l-2 1v2.5H4v-3.75l-.82-.47c-.56-.32-.92-.9-1.03-1.56a3.006 3.006 0 0 1 .77-2.72ZM22.08 10.06c-.12.39-.39.75-.78.95-2.08 1.05-5.42 2.42-6.82 3.08v3.91l2 1v2.5h1.5v-3.75l.82-.47c.56-.32.92-.9 1.03-1.56a3.006 3.006 0 0 0-.77-2.72ZM12 13.8c-.39 0-.78.16-1.06.44a1.49 1.49 0 0 0 0 2.12c.56.56 1.56.56 2.12 0a1.49 1.49 0 0 0 0-2.12c-.28-.28-.67-.44-1.06-.44ZM8 20v-2h2v2h-2Zm4 0v-2h2v2h-2Zm4 0v-2h2v2h-2Z" />
             </svg>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Mahasiswa</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2 bg-gray-700">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 text-white hover:bg-gray-600 text-sm">- Data</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 text-white hover:bg-gray-600 text-sm">- Tambah</a>
                  </li>
            </ul>
         </li>
         <!-- <li>
            <button type="button" class="flex items-center w-full p-2 text-sm transition duration-75 rounded-lg group text-white hover:bg-gray-700" aria-controls="dropdown-one" data-collapse-toggle="dropdown-one">
                 <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"/>
                 </svg>
 
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Nilai</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-one" class="hidden py-2 space-y-2 bg-gray-700">
                  <li>
                     <a href="../Nilai/index.php" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 text-white hover:bg-gray-600 text-sm">- Data</a>
                  </li>
                  <li>
                     <a href="../Nilai/add.php" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 text-white hover:bg-gray-600 text-sm">- Tambah</a>
                  </li>
            </ul>
         </li> -->
         <li>
            <button type="button" class="flex items-center w-full p-2 text-sm transition duration-75 rounded-lg group text-white hover:bg-gray-700" aria-controls="dropdown-one" data-collapse-toggle="dropdown-two">
                 <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M4 3v18h16V3H4Zm6 16H6V5h4v14Zm6-10h-4V5h4v4Zm0 10h-4v-6h4v6Z"/>
               </svg>
 
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-sm">Matakuliah</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-two" class="hidden py-2 space-y-2 bg-gray-700">
                  <li>
                     <a href="/admin/mtklh" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 text-white hover:bg-gray-600 text-sm">- Data</a>
                  </li>
                  <li>
                     <a href="/admin/addmatkul" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 text-white hover:bg-gray-600 text-sm">- Tambah</a>
                  </li>
            </ul>
         </li>
      </ul>
   </div>
</aside>