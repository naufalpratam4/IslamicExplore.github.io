<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <img src="{{ asset('assets/landingpage/LOGO ISLAMICXPLORE-04 1.png') }}" alt=""
                    class="bg-green-500 rounded-xl">
            </li>
            <li>

                <a href="/admin/dashboard"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-800 hover:text-white dark:hover:bg-gray-700 group {{ implode(' ', Request::is('admin/dashboard') ? ['bg-green-500', 'text-white'] : []) }}">
                    <i class="fa-solid fa-table-columns"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin/materi"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-800 hover:text-white dark:hover:bg-gray-700 group {{ implode(' ', Request::is('admin/materi', 'admin/materi/tambah-materi') ? ['bg-green-500', 'text-white'] : []) }}">
                    <i class="fa-solid fa-book"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Materi</span>

                </a>
            </li>
            <li>
                <a href="/admin/contact"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-800 hover:text-white dark:hover:bg-gray-700 group {{ implode(' ', Request::is('admin/contact') ? ['bg-green-500', 'text-white'] : []) }}">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Contact</span>

                </a>
            </li>
            <form action="{{ route('admin.logout') }}" method="POST">
                <li>
                    @csrf
                    <a href=""
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-green-800 hover:text-white dark:hover:bg-gray-700 group {{ implode(' ', Request::is('') ? ['bg-green-500', 'text-white'] : []) }}">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <button class="" type="submit">
                            <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                        </button>
                    </a>
                </li>
            </form>
        </ul>
    </div>
</aside>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <section>
            @yield('content')
        </section>
    </div>
</div>
