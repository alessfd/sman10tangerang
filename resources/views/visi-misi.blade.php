<x-visi-layout>
    <x-slot name="slot">
        <section class="w-full h-auto flex flex-col items-center px-3 py-6">
            <h1 class="text-4xl font-semibold text-gray-900 mb-6 text-center">VISI MISI SMA NEGERI 10 TANGERANG</h1>

            <!-- Visi Section with Image and Content -->
            <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-6 w-full max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg items-center justify-center">
                <img src="{{ asset('img/visi.png') }}" alt="Visi Design" class="w-full h-auto max-h-96 object-contain mb-6 lg:mb-0">
                
                <!-- Visi Content -->
                <div class="mt-6 lg:mt-0 text-center lg:text-left px-4">
                    <p class="text-2xl text-gray-600 leading-relaxed">
                        {{$profiles->visi}}
                    </p>
                </div>
            </div>

            <!-- Misi Section with Content and Image -->
            <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-6 w-full max-w-7xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10 items-center justify-center">
                <!-- Misi Content -->
                <div class="mt-6 lg:mt-0 text-center lg:text-left order-2 lg:order-1 px-4">
                    <ol class="list-decimal pl-6 text-2xl text-gray-600 leading-relaxed">
                        @foreach ($profiles->misi as $misi)
                            <li>{{ $misi }}</li>
                        @endforeach
                    </ol>
                </div>
                
                <!-- Canva Image for Misi -->
                <img src="{{ asset('img/misi.png') }}" alt="Misi Design" class="w-full h-auto order-1 lg:order-2 max-h-96 object-contain mb-6 lg:mb-0">
            </div>
        </section>
    </x-slot>
</x-visi-layout>
