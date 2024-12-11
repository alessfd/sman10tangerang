<x-ArticleApp-Layout>
    <!-- main banner container -->
    <div class="mb-20 -mt-8 bg-green-200 py-20 relative">
        <img src="{{ asset('img/foto_sekolah.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover opacity-60">
        <div class="text-center relative z-2">
            <h1 class="text-5xl font-bold text-white">Kontak Kami</h1>
        </div>
    </div>

    <!-- Contact Info Container -->
    <div class="mb-20 flex justify-center items-center mx-auto">
        <div class="flex flex-col md:flex-row md:space-x-16 space-y-12 md:space-y-0">
            <div class="text-center">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-24 h-24 flex items-center justify-center">
                        <i class="fas fa-headset text-4xl text-green-500"></i>
                    </div>
                </div>
                <p class="text-xl font-bold text-gray-800">+62 21-554-9370</p>
                <p class="text-gray-600 mt-2">Senin - Jum'at: 8:00 - 17:00</p>
            </div>

            <!-- Address Section -->
            <a href="https://maps.app.goo.gl/G5DwscKBRhxMi6FK8" class="text-center cursor-pointer">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-24 h-24 flex items-center justify-center">
                        <i class="fas fa-map-marker-alt text-4xl text-red-600"></i>
                    </div>
                </div>
                <p class="w-46 lg:w-80 text-xl font-bold text-gray-800">Jl. Raya Cipondoh, Poris Plawad Indah, Kota Tangerang, Banten</p>
                <p class="text-gray-600 mt-2">Klik untuk buka map</p>
            </a>

            <!-- Email Section -->
            <div class="text-center">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-24 h-24 flex items-center justify-center">
                        <i class="fas fa-envelope text-4xl text-green-500"></i>
                    </div>
                </div>
                <p class="text-xl font-bold text-gray-800">admin@sman10</p>
                <p class="text-xl font-bold text-gray-800">kotatangerang.sch.id</p>
                <p class="text-gray-600 mt-2">Email pertanyaan</p>
            </div>
        </div>
    </div>

    <!-- form container
    <!-- social media -->
    <div class="pb-24 flex flex-col items-center">
        <p class="pb-8 text-3xl font-bold">Ikuti Tenta!</p>
        <div class="flex justify-center items-center">
            <div class="flex space-x-8 md:space-x-20">
                <a href="https://www.instagram.com/oska.tenta?igshid=YmMyMTA2M2Y%3D">
                    <div class="w-16 h-16 flex items-center justify-center bg-green-100 rounded-full">
                        <i class="fab fa-instagram text-3xl text-black"></i>
                    </div>
                </a>
                <a href="https://www.youtube.com/channel/UCguOH6smwyH1C-P7P6DPqQA">
                    <div class="w-16 h-16 flex items-center justify-center bg-green-100 rounded-full">
                        <i class="fab fa-youtube text-3xl text-black"></i>
                    </div>
                </a>
                <!-- TikTok Icon -->
                <a href="https://www.tiktok.com/@oska.tenta">
                    <div class="w-16 h-16 flex items-center justify-center bg-green-100 rounded-full">
                        <svg class="h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
                    </div>
                </a>
            </div>
        </div>
        <!--Script Buat Icons -->
        <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    </div>
</x-ArticleApp-Layout>
