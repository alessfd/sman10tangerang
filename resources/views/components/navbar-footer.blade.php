
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <header class="bg-white shadow mb-8">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img class="h-12 w-auto" src="/favicon.ico" alt="Logo">
                    <span class="text-xl font-bold text-gray-800 ml-3">SMAN 10 TANGERANG</span>
                </a>
            </div>
            <div class="flex lg:hidden mobile-toggle">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <div class="relative">
                    <button type="button" class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
                        Info
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>


                    <div class="absolute hidden -left-8 top-full z-10 mt-3 max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" style="width: 22vw;">
                        <div class="p-4">
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <x-heroicon-o-academic-cap class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" />
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Profil
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Profil Sekolah</p>
                                </div>
                            </div>
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <x-heroicon-o-magnifying-glass class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" />
                                </div>
                                <div class="flex-auto">
                                    <a href="visi-misi" class="block font-semibold text-gray-900">
                                        Visi Misi
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Visi dan Misi Sekolah</p>
                                </div>
                            </div>
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <x-heroicon-o-user class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" />
                                </div>
                                <div class="flex-auto">
                                    <a href="/alumni" class="block font-semibold text-gray-900">
                                        Alumni
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Alumni Sekolah</p>
                                </div>
                            </div>
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <x-heroicon-o-building-library class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" />
                                </div>
                                <div class="flex-auto">
                                    <a href="/fasilitas" class="block font-semibold text-gray-900">
                                        Fasilitas
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Fasiltas yang dimiliki</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="social-dropdown relative">
                    <button type="button" class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
                        Social
                        <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>


                    <div class="absolute hidden -left-8 top-full z-10 mt-3 max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5" style="width: 19.5vw;">
                        <div class="p-4">
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="https://msha.ke/sman10kotatangerang?fbclid=PAZXh0bgNhZW0CMTEAAabYXd7F0FQh7J6ZMmGbeCCAXvt3O_q7vckJ55OQlnEmkjeeQJBtNR7wuLk_aem_3cicMyzU6hObm3fGMYm-xQ" class="block font-semibold text-gray-900">
                                        Instagram
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">Link Tree</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <a href="#" class="text-sm/6 font-semibold text-gray-900">Email</a> -->
                <a href="/article" class="text-sm/6 font-semibold text-gray-900">Berita</a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="hidden lg-hidden mobile-nav w-3/6" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed  w-3/6 inset-0 z-10"></div>
            <div class="fixed w-3/6 inset-y-0 right-0 z-10  overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-end">
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <div class="-mx-3">
                                <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                                    Info
                                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <div class="mt-2 space-y-2 hidden" id="disclosure-1">
                                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Profil</a>
                                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Visi Misi</a>
                                    <a href="/alumni" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Alumni</a>
                                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Fasilitas</a>
                                </div>
                            </div>
                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Social</a>
                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Berita</a>
                        </div>
                        <div class="py-6">
                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{$slot}}

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-5">
        <div class="mx-auto max-w-7xl p-6 grid grid-cols-2 lg:grid-cols-5 gap-8">
            <!-- Logo and School Name Section -->
            <div class="flex items-center">
                <img class="h-16 w-auto mr-3" src="/favicon.ico" alt="School Logo">
                <span class="text-lg font-bold">SMAN 10 Tangerang</span>
            </div>

            <!-- About Section -->
            <div>
                <h3 class="text-lg font-semibold mb-3">Tentang</h3>
                <p class="text-sm">SMAN 10 Tangerang adalah sekolah unggulan yang berfokus pada pendidikan berkualitas dan pembangunan karakter siswa.</p>
            </div>

            <!-- Navigation Section -->
            <div class="ml-10">
                <h3 class="text-lg font-semibold mb-3">Navigasi</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/profil" class="hover:underline">Profil</a></li>
                    <li><a href="/visi-misi" class="hover:underline">Visi & Misi</a></li>
                    <li><a href="/fasilitas" class="hover:underline">Fasilitas</a></li>
                    <li><a href="/article" class="hover:underline">Berita</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="-ml-10">
                <h3 class="text-lg font-semibold mb-3">Kontak</h3>
                <p class="text-sm">Jalan Pendidikan No. 10, Tangerang</p>
                <p class="text-sm">Email: info@sman10tangerang.sch.id</p>
                <p class="text-sm">Telepon: (021) 123-4567</p>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-3">Sosial Media</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="https://instagram.com" class="hover:underline">Instagram</a></li>
                    <li><a href="https://facebook.com" class="hover:underline">Facebook</a></li>
                    <li><a href="https://twitter.com" class="hover:underline">Twitter</a></li>
                </ul>
            </div>
        </div>
        <!-- Footer Bottom Section -->
        <div class="bg-gray-900 text-gray-400 text-center p-4">
            © 2024 SMAN 10 Tangerang. All rights reserved.
        </div>
    </footer>

</body>


