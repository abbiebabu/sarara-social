<header class="sticky top-0 z-50 flex flex-wrap w-full py-3 text-sm bg-white shadow-md md:justify-start md:flex-nowrap md:py-0 dark:bg-zinc-900">
    <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Global">
      <div class="relative md:flex md:items-center md:justify-between">
        <div class="flex items-center justify-between">

          
            <div class="flex items-center space-x-2">
                <a wire:navigate href="/">
                  <img class="hidden h-20 md:block" src="\images\sarara-logo-invert.png" alt="Logo">
                </a>
            </div>
          
          <div class="md:hidden">
            <button type="button" class="flex items-center justify-center text-sm font-semibold border rounded-lg text-zinc-800 border-zinc-200 hs-collapse-toggle w-9 h-9 hover:bg-zinc-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-zinc-700 dark:hover:bg-zinc-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-zinc-600" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
              <svg class="flex-shrink-0 w-4 h-4 hs-collapse-open:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" x2="21" y1="6" y2="6" />
                <line x1="3" x2="21" y1="12" y2="12" />
                <line x1="3" x2="21" y1="18" y2="18" />
              </svg>
              <svg class="flex-shrink-0 hidden w-4 h-4 hs-collapse-open:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
              </svg>
            </button>
          </div>
        </div>
  
        <div id="navbar-collapse-with-animation" class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow md:block">
          <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-zinc-100 [&::-webkit-scrollbar-thumb]:bg-zinc-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500">
            <div class="flex flex-col mt-5 divide-y divide-zinc-200 gap-x-0 divide-dashed md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid dark:divide-zinc-700">
              
              @guest
                
              <a wire:navigate class="{{request()->is('/') ? 'text-red-600':'text-zinc-400' }} py-3 font-medium dark:hover:text-red-400 md:py-6 dark:focus:outline-none dark:focus:ring-zinc-600" href="/" aria-current="page">
                Home
              </a>
              @endguest
 
              @auth
                
              <a wire:navigate class="{{request()->is('feed') ? 'text-red-600':'text-zinc-400' }} py-3 font-medium dark:hover:text-red-400 md:py-6 dark:focus:outline-none dark:focus:ring-zinc-600" href="/feed">
                Feed
              </a>
    
              <a wire:navigate class="{{request()->is('events') ? 'text-red-600':'text-zinc-400' }} py-3 font-medium dark:hover:text-red-400 md:py-6 dark:focus:outline-none dark:focus:ring-zinc-600" href="/events">
                Events
              </a>

              <a wire:navigate class="{{request()->is('marketplace') ? 'text-red-600':'text-zinc-400' }} py-3 font-medium dark:hover:text-red-400 md:py-6 dark:focus:outline-none dark:focus:ring-zinc-600" href="/marketplace">
                Marketplace
              </a>
  
              <a wire:navigate class="{{request()->is('cart') ? 'text-red-600':'text-zinc-400' }} flex items-center py-3 font-medium dark:hover:text-red-400 md:py-6 dark:focus:outline-none dark:focus:ring-zinc-600" href="/cart">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-1">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <span class="mr-1">Cart</span> <span class="py-0.5 px-1.5 rounded-full text-xs font-medium bg-zinc-800  text-red-600">{{$total_count}}</span>
              </a>
              @endauth
              
              @guest
              <div class="pt-3 md:pt-0">
                <a wire:navigate class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-coral-red-600 text-white hover:bg-coral-red-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-zinc-600" href="/login">
                  <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                    <circle cx="12" cy="7" r="4" />
                  </svg>
                  Log in
                </a>
              </div>
              @endguest
  
              @auth
              <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:py-4">
                <button type="button" class="flex items-center w-full font-medium text-zinc-500 hover:text-zinc-200 dark:text-zinc-200 dark:hover:text-zinc-300">
                  {{ Auth::user()->name }}
              <svg class="w-4 h-4 ms-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
              </svg>
              </button>
  
              <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-zinc-800 md:dark:border dark:border-zinc-700 dark:divide-zinc-700 before:absolute top-full md:border before:-top-5 before:start-0 before:w-full before:h-5">
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-zinc-800 hover:bg-zinc-100 focus:ring-2 focus:ring-blue-500 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-zinc-600" wire:navigate href="/my-orders">
                  My Orders
                </a>
  
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-zinc-800 hover:bg-zinc-100 focus:ring-2 focus:ring-blue-500 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-zinc-600" wire:navigate href="#">
                  My Account
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-zinc-800 hover:bg-zinc-100 focus:ring-2 focus:ring-blue-500 dark:text-zinc-400 dark:hover:bg-zinc-700 dark:hover:text-zinc-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-zinc-600" wire:navigate href="/logout">
                  Logout
                </a>
              </div>
            </div>
              @endauth
  
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>