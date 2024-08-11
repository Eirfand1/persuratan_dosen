<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="bg-indigo-800 flex justify-center align-center p-2">
      <h1 class="text-2xl text-white font-semibold">SI-Saren</h1>
   </div>
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800 ">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="/dosen" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-100 hover:bg-gray-700 group">
               <svg class="w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3 text-sm">Dashboard</span>
            </a>
         </li>
         
         <li>
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
                     <a href="/dosen/nilai" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 text-white hover:bg-gray-600 text-sm">- Data</a>
                  </li>
                  <li>
                     <a href="/dosen/tambahnilai" class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 text-white hover:bg-gray-600 text-sm">- Tambah</a>
                  </li>
            </ul>
         </li>
      </ul>
   </div>
</aside>