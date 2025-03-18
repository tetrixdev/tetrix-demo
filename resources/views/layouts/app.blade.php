@extends('tx::layout-base')

@section('tx-header')
    <header
        class="w-full h-12 flex flex-row items-center text-color-tx-general-800 bg-tx-general-200 dark:bg-tx-general-900 border-b-[1px] border-b-tx-general-300 dark:border-b-tx-general-800"
    >
        <div class="flex-none h-12 p-1">
            Logo
        </div>

        <div class="flex-1"></div>

        <nav class="flex-none flex flex-row items-center">
            <div class="flex-none flex flex-row justify-center px-6 gap-9 relative">
                <!-- First menu item -->
                <span class="cursor-pointer">
        <i class="fa-solid fa-cog mr-2"></i>test2
      </span>

                <!-- Dropdown menu wrapper: 'relative' anchors the main dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <!-- Trigger -->
                    <span
                        @click="open = !open"
                        class="cursor-pointer"
                    >
          <i class="fa-solid fa-user mr-2"></i>test2
        </span>

                    <!-- Main Dropdown -->
                    <div
                        x-show="open"
                        @click.outside="open = false"
                        class="absolute top-full right-0 mt-2 w-36
                 bg-white dark:bg-tx-general-800 border
                 border-tx-general-200 dark:border-tx-general-700
                 rounded shadow-md"
                    >
                        <a
                            href="#"
                            class="block px-4 py-2 text-sm hover:bg-tx-general-100 dark:hover:bg-tx-general-700"
                        >
                            Profile
                        </a>
                        <a
                            href="#"
                            class="block px-4 py-2 text-sm hover:bg-tx-general-100 dark:hover:bg-tx-general-700"
                        >
                            Settings
                        </a>

                        <!-- Nested submenu wrapper -->
                        <div
                            x-data="{ subOpen: false }"
                            class="relative"
                        >
                            <!-- Submenu trigger -->
                            <button
                                @click="subOpen = !subOpen"
                                class="w-full text-left block px-4 py-2 text-sm hover:bg-tx-general-100 dark:hover:bg-tx-general-700"
                            >
                                Advanced
                            </button>

                            <!-- Nested Submenu -->
                            <div
                                x-show="subOpen"
                                @click.outside="subOpen = false"
                                class="absolute top-0 left-full ml-1 w-36
                     bg-white dark:bg-tx-general-800 border
                     border-tx-general-200 dark:border-tx-general-700
                     rounded shadow-md"
                            >
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm hover:bg-tx-general-100 dark:hover:bg-tx-general-700"
                                >
                                    Option A
                                </a>
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm hover:bg-tx-general-100 dark:hover:bg-tx-general-700"
                                >
                                    Option B
                                </a>
                                <a
                                    href="#"
                                    class="block px-4 py-2 text-sm hover:bg-tx-general-100 dark:hover:bg-tx-general-700"
                                >
                                    Option C
                                </a>
                            </div>
                        </div>

                        <a
                            href="#"
                            class="block px-4 py-2 text-sm hover:bg-tx-general-100 dark:hover:bg-tx-general-700"
                        >
                            Logout
                        </a>
                    </div>
                </div>

                <!-- Another menu item -->
                <span class="cursor-pointer">
        <i class="fa-solid fa-cog mr-2"></i>test2
      </span>
            </div>
        </nav>
    </header>


@endsection
