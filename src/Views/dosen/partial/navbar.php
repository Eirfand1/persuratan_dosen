<nav class="bg-indigo-700 border-purple-200 dark:bg-purple-800">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
   <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open sidebar</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
      </svg>
   </button> 
   <div class="text-center">
   </div>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex text-sm bg-purple-800 rounded-full md:me-0 focus:ring-4 focus:ring-purple-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-purple-50 divide-y divide-purple-100 rounded-lg shadow" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-purple-900">Bonnie Green</span>
          <span class="block text-sm text-purple-500 truncate">name@flowbite.com</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-100">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-100">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-100">Earnings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-100">Sign out</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-purple-500 rounded-lg md:hidden hover:bg-purple-100 focus:outline-none focus:ring-2 focus:ring-purple-200" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    </div>
  </div>
</nav>
