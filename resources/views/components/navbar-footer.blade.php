<body class="bg-white font-family-karla flex flex-col min-h-screen">
    <header class="bg-white shadow top-0 w-full z-10" id="navbar">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img class="h-12 w-auto transition-transform duration-300 ease-in-out hover:scale-110" src="/favicon.ico" alt="Logo">
                    <span class="text-xl font-bold text-gray-800 ml-3">SMAN 10 TANGERANG</span>
                </a>
            </div>

            <!-- Hamburger Menu Button -->
            <div class="flex lg:hidden">
                <button type="button" id="hamburger-menu" class="inline-flex items-center justify-center p-2.5 text-gray-700">
                    <svg class="h-6 w-6" id="menu-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="h-6 w-6 hidden" id="close-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex lg:gap-x-12">
                <div class="relative group">
                    <button type="button" class="flex items-center gap-x-1 text-sm font-semibold text-gray-900" aria-expanded="false">
                        Info
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-lg p-4 mt-2 z-20 w-80">
                        <a href="/profile">
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <x-heroicon-o-academic-cap class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" />
                                </div>
                                <div class="flex-auto">
                                    <p class="block font-semibold text-gray-900">Profil Sekolah</p>
                                    <p class="mt-1 text-gray-600">Profil Guru dan Staf</p>
                                </div>
                            </div>
                        </a>
                        <a href="/visi-misi">
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <x-heroicon-o-magnifying-glass class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" />
                                </div>
                                <div class="flex-auto">
                                    <p class="block font-semibold text-gray-900">Visi Misi</p>
                                    <p class="mt-1 text-gray-600">Visi dan Misi Sekolah</p>
                                </div>
                            </div>
                        </a>
                        <a href="/alumni">
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <x-heroicon-o-user class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" />
                                </div>
                                <div class="flex-auto">
                                    <p class="block font-semibold text-gray-900">Alumni</p>
                                    <p class="mt-1 text-gray-600">Alumni Sekolah</p>
                                </div>
                            </div>
                        </a>
                        <a href="/facilities">
                            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                    <x-heroicon-o-building-library class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" />
                                </div>
                                <div class="flex-auto">
                                    <p class="block font-semibold text-gray-900">Fasilitas</p>
                                    <p class="mt-1 text-gray-600">Fasilitas yang dimiliki</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a href="/article" class="text-sm font-semibold text-gray-900">Berita</a>
                <a href="http://154.41.229.66/login/index.php" target="_blank" class="text-sm font-semibold text-gray-900">Moodle</a>
                <a href="http://116.197.131.41:2023/login" target="_blank" class="text-sm font-semibold text-gray-900">E-Raport</a>
                <a href="/contact" class="text-sm font-semibold text-gray-900">Kontak</a>
            </div>


        </nav>
        <!-- Mobile Menu -->
        <div class="hidden lg:hidden mobile-nav bg-white shadow-lg w-full p-6" id="mobile-menu">
            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
            <a href="/visi-misi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi & Misi</a>
            <a href="/alumni" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Alumni</a>
            <a href="/facilities" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Fasilitas</a>
            <a href="/article" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Berita</a>
            <a href="http://154.41.229.66/login/index.php" target="_blank" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Moodle</a>
            <a href="http://116.197.131.41:2023/login" target="_blank" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">E-Raport</a>
            <a href="/contact" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kontak</a>
        </div>
    </header>

    <!-- Content -->
    <div class="flex-grow">
        {{$slot}}
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-5">
        <div class="mx-auto max-w-7xl p-6 grid grid-cols-2 lg:grid-cols-5 gap-8">
            <div class="flex items-center">
                <img class="h-16 w-auto mr-3" src="/favicon.ico" alt="School Logo">
                <span class="text-lg font-bold">SMAN 10 Tangerang</span>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-3">Tentang</h3>
                <p class="text-sm">SMAN 10 Tangerang adalah sekolah unggulan yang berfokus pada pendidikan berkualitas dan pembangunan karakter siswa.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-3">Navigasi</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/profile" class="hover:underline">Profil</a></li>
                    <li><a href="/visi-misi" class="hover:underline">Visi & Misi</a></li>
                    <li><a href="/facilities" class="hover:underline">Fasilitas</a></li>
                    <li><a href="/article" class="hover:underline">Berita</a></li>
                    <li><a href="/contact" class="hover:underline">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-3">Reach Us</h3>
                <p class="text-sm">Jl. KH. Hasyim Ashari Gg. Sasak Poris Plawad Indah Cipondoh Kota Tangerang 15141</p>
                <p class="text-sm">Email: info@sman10tangerang.sch.id</p>
                <p class="text-sm">Telepon: (021) 123-4567</p>
            </div>
        </div>
        <div class="bg-gray-900 text-gray-400 text-center p-4">
            © 2024 SMAN 10 Tangerang. All rights reserved.
        </div>
    </footer>

    <script>
        const hamburgerMenu = document.getElementById('hamburger-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        hamburgerMenu.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</body>
