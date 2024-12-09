<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sman 10 Tangerang</title>
    <meta name="description" content="">

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- Tailwind -->
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    <script src="{{asset('js/home/home.js')}}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="bg-white font-family-karla flex flex-col min-h-screen">
    <x-navbar-footer>
        <div id="image-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-[50vh] md:h-[75vh] overflow-hidden" style="height:40vw;">
                <!-- Slides -->
                @foreach (range(1, 5) as $index)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset("img/home$index.jpg") }}" 
                         class="absolute w-full h-full object-cover" alt="Slide {{ $index }}">
                </div>
                @endforeach
            </div>

            <!-- Slider indicators -->
            <div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 space-x-3 z-20">
                @foreach (range(0, 4) as $index)
                <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                @endforeach
            </div>

        </div>

        <div class="container mx-auto px-4 mt-8">
            <section class="flex flex-col lg:flex-row lg:space-x-8">
                <!-- Main content section -->
                <div class="w-full lg:w-2/3 space-y-6">
                    {{ $slot }}
                </div>

                <!-- About Us section -->
                <aside class="w-full lg:w-1/4 mt-8 lg:mt-0">
                    <div class="bg-white shadow rounded-lg p-6">
                        <p class="text-xl font-bold mb-4">About Us</p>
                        <p class="text-justify text-gray-700 mb-4">
                            SMAN 10 Tangerang Selatan, established in 2006 with an "A" accreditation, is a top-tier school emphasizing academic excellence and character development...
                        </p>
                        <a href="/contact" class="block text-center bg-blue-800 text-white font-bold text-sm uppercase rounded px-4 py-3 hover:bg-blue-700">Get to know us</a>
                    </div>
                </aside>
            </section>
        </div>

        <!-- Facilities section -->
        <div class="mb-12">
            {{$page}}
        </div>
</body>

</x-navbar-footer>
</html>