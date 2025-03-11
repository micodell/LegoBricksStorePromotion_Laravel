<div class="px-4 py-4 flex flex-wrap justify-between items-center shadow-xl text-slate-200 bg-transparent sticky z-50">
    <a href="https://www.tokopedia.com/archive-legobricksstore" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('assets/lego_bricks_store.jpg') }}" alt="" class="h-10 sm:h-12 rounded-full">
        <h1 class="font-bold text-2xl sm:text-3xl">Lego Bricks Store</h1>
    </a>
    <button id="menu-toggle" data-collapse-toggle="navbar" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden hover:text-blue-500 focus:outline-none transition-all ease-in-out duration-300" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg id="burgermenu-icon" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
        <svg id="close-icon" class="w-7 h-7 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 6l12 12M6 18L18 6"/>
        </svg>
    </button>
    <div id="navbar" class="hidden absolute z-50 top-16 sm:top-20 bottom-0 left-0 w-full h-44 p-4 glassNav md:bg-transparent md:relative md:top-0 md:block md:w-auto md:h-auto shadow-xl transition-all duration-300">
      <ul class="flex flex-col font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 bg-transparent">
          <li>
              <a href="{{ route('index') }}" class="block py-2 px-3 mt-2 sm:mt-0 md:p-0 text-gray-900 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-400 dark:text-white hover:text-blue-500 md:dark:hover:bg-transparent hover:text-lg md:hover:text-base  transition-all duration-300">Products</a>
          </li>
          <li>
              <a href="/review" class="block py-2 px-3 md:p-0 text-gray-900 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-400 dark:text-white hover:text-blue-500 md:dark:hover:bg-transparent hover:text-lg md:hover:text-base  transition-all duration-300">Testimony</a>
          </li>
          <li>
              <a href="mailto:michellenathaniawinata@gmail.com" class="block py-2 px-3 md:p-0 text-gray-900 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-400 dark:text-white hover:text-blue-500 md:dark:hover:bg-transparent hover:text-lg md:hover:text-base  transition-all duration-300">Contact</a>
          </li>
      </ul>
  </div>

    <!-- <span class="flex gap-4">
        <a href="" class="font-semibold hover:text-blue-400 text-sm sm:text-base">Testimony</a>
        <a href="" class="font-semibold hover:text-blue-400 text-sm sm:text-base">Products</a>
        <a href="" class="font-semibold hover:text-blue-400 text-sm sm:text-base">Contact Us</a>
    </span> -->
</div>

<script>
    const toggleButton = document.querySelector("[data-collapse-toggle='navbar']");
    const navbarMenu = document.getElementById("navbar");

    toggleButton.addEventListener("click", function () {
      navbarMenu.classList.toggle("hidden");
    });

    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('burgermenu-icon').classList.toggle('hidden');
        document.getElementById('close-icon').classList.toggle('hidden');
    });
</script>