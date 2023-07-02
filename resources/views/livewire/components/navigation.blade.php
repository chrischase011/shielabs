<nav class="w-full {{ $isAdmin ? "fixed top-0" : ''}} p-2 border-b-2 border-b-slate-500 z-[100] bg-blue">
    <div class="mx-auto px-9">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="#" class="text-2xl font-semibold text-white no-underline">Shielabs</a>
                {{-- <a href="#" class="text-2xl font-semibold text-white no-underline">Fash-ion</a> --}}
            </div>

            {{-- Desktop --}}
            <div class="items-center mr-auto 2xs:hidden xs:hidden sm:hidden md:hidden lg:flex">
                <ul class="flex flex-row mx-16">
                    <li class="ml-5">
                        <a href="{{ route('home') }}"
                            class="text-lg font-normal text-white no-underline transition ease-in-out delay-150 hover:text-slate-300">Home</a>
                    </li>
                    <li class="ml-5">
                        <a href="#"
                            class="text-lg font-normal text-white no-underline transition ease-in-out delay-150 hover:text-slate-300">About</a>
                    </li>
                    <li class="ml-5">
                        <a href="#"
                            class="text-lg font-normal text-white no-underline transition ease-in-out delay-150 hover:text-slate-300">Contact
                            Us</a>
                    </li>
                </ul>
            </div>

            <div class="items-center ml-auto 2xs:hidden xs:hidden sm:hidden md:hidden lg:flex">
                <ul class="flex flex-row mx-6">
                    <li class="mx-3">
                        <a href="#"
                            class="text-lg font-normal text-white no-underline transition ease-in-out delay-150 hover:text-slate-300"><i
                                class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                    @guest
                        <li class="mx-6">
                            <a href="{{ route('login') }}"
                                class="text-lg font-normal text-white no-underline transition ease-in-out delay-150 hover:text-slate-300">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}"
                                class="text-lg font-normal text-white no-underline transition ease-in-out delay-150 hover:text-slate-300">Register</a>
                        </li>
                    @else
                        @if ($userRole->slug == 'admin')
                            <li class="mx-3">
                                <a href="{{ route('admin.dashboard') }}"
                                    class="text-lg font-normal text-white no-underline transition ease-in-out delay-150 hover:text-slate-300">Dashboard</a>
                            </li>
                        @endif

                        <li class="mx-3">
                            <a href="#"
                                class="text-lg font-normal text-white no-underline transition ease-in-out delay-150 hover:text-slate-300">My
                                Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                class="text-lg font-normal text-white no-underline transition ease-in-out delay-150 hover:text-slate-300">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>



            {{-- Mobile --}}
            <div x-data="{ open: false }">
                <div x-effect="console.log('open:', open)"
                    class="items-center ml-auto lg:hidden 2xs:flex xs:flex sm:flex md:flex">
                    <ul class="flex flex-row mx-6">
                        <li>
                            <button type="button" class="bg-transparent s" x-on:click="open = ! open">
                                <span class="sr-only">Open menu</span>
                                <svg class="w-6 h-6 transition delay-75 ease" aria-hidden="true" fill="#fff"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    :class="{ 'transform rotate-180': open, 'transform rotate-0': !open }">
                                    <path x-show="!open" fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                    <path x-show="open" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.5 1.5L13.5 13.5M1.5 13.5L13.5 1.5" stroke="#fff" stroke-width="2" />
                                </svg>
                            </button>
                        </li>
                    </ul>

                </div>


                {{-- Mobile Dropdown --}}
                <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="absolute left-0 z-[80] items-start justify-center w-full h-full bg-white 2xs:flex xs:flex sm:flex md:flex lg:hidden top-20">
                    <div class="flex items-center justify-center mt-3">
                        <ul class="flex flex-col text-center">
                            <li class="my-5">
                                <a href="{{ route('home') }}"
                                    class="text-xl font-semibold no-underline transition ease-in-out delay-150 text-hansBlue hover:text-slate-300">Home</a>
                            </li>
                            <li class="my-5">
                                <a href="#"
                                    class="text-xl font-semibold no-underline transition ease-in-out delay-150 text-hansBlue hover:text-slate-300">About</a>
                            </li>
                            <li class="my-5">
                                <a href="#"
                                    class="text-xl font-semibold no-underline transition ease-in-out delay-150 text-hansBlue hover:text-slate-300">Contact
                                    Us</a>
                            </li>
                            @guest
                                <li class="my-5">
                                    <a href="{{ route('login') }}"
                                        class="text-xl font-semibold no-underline transition ease-in-out delay-150 text-hansBlue hover:text-slate-300">Login</a>
                                </li>
                                <li class="my-5">
                                    <a href="{{ route('register') }}"
                                        class="text-xl font-semibold no-underline transition ease-in-out delay-150 text-hansBlue hover:text-slate-300">Register</a>
                                </li>
                            @else
                                @if ($userRole->slug == 'admin')
                                    <li class="my-5">
                                        <a href="{{ route('admin.dashboard') }}"
                                            class="text-xl font-semibold no-underline transition ease-in-out delay-150 text-hansBlue hover:text-slate-300">Dashboard</a>
                                    </li>
                                @endif
                                <li class="my-5">
                                    <a href="#"
                                        class="text-xl font-semibold no-underline transition ease-in-out delay-150 text-hansBlue hover:text-slate-300">My
                                        Profile</a>
                                </li>
                                <li class="my-5">
                                    <a href="{{ route('logout') }}"
                                        class="text-xl font-semibold no-underline transition ease-in-out delay-150 text-hansBlue hover:text-slate-300">Logout</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
