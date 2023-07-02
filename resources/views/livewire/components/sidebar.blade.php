<div x-data="{ open: false }">
    <div x-show="!open" class="fixed top-[5.5rem] z-[50]">
        <button x-on:click="open = ! open"
            class="bg-white border-2 float-right p-1 px-3 rounded hover:bg-gray-100 transition ease-linear font-bold">
            <svg class="w-6 h-6 transition delay-75 ease" aria-hidden="true" fill="#000" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
                :class="{ 'transform rotate-180': open, 'transform rotate-0': !open }">
                <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                {{-- <path x-show="open" fill-rule="evenodd" clip-rule="evenodd" d="M1.5 1.5L13.5 13.5M1.5 13.5L13.5 1.5"
                stroke="#fff" stroke-width="2" /> --}}
            </svg>
        </button>
    </div>

    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform" x-transition:enter-end="opacity-100 transform"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform "
        x-transition:leave-end="opacity-0 transform fade" id="sidebar"
        class="w-full h-screen fixed z-[60] bg-black bg-opacity-50">
        <div class="w-1/4 bg-white h-full relative flex flex-col z-[70]">
            <div class="w-full flex justify-end">
                <button x-on:click="open = ! open"
                    class=" bg-white border-2 float-right p-1 px-3 rounded hover:bg-gray-100 transition ease-linear font-bold">
                    < </button>
            </div>


            <div class="w-full mt-1 flex justify-center border-b-2">
                <div class="mt-3 mb-3">
                    <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
                </div>
            </div>

            <nav class="mt-6 w-full flex justify-center flex-col">
                <a href="#" class="flex just items-center py-2 px-8 hover:text-gray-500">
                    <i class="fa-solid fa-gauge mr-3"></i>

                    Dashboard
                </a>
                <a href="#" class="flex items-center py-2 px-8 hover:text-gray-500">
                    <i class="fa-solid fa-cart-shopping mr-3"></i>
                    Product Management
                </a>
                <a href="#" class="flex items-center py-2 px-8 hover:text-gray-500">
                    <i class="fa-solid fa-users mr-3"></i>
                    Users
                </a>
            </nav>
        </div>

    </div>
</div>
