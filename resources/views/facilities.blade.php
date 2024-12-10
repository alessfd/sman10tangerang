<!-- resources/views/facilities.blade.php -->
<x-facility-layout>
    <x-slot name="slot">
        <!-- Facilities Content Section -->
        <section class="w-full h-auto flex flex-col items-center px-3 py-6">
            <h1 class="text-4xl font-semibold text-gray-900 mb-12">FASILITAS</h1>
            <div class="w-full max-w-7xl p-6 shadow-md rounded-lg">
                <!-- Menampilkan daftar fasilitas -->
                <div class="space-y-12">
                    @foreach ($facilities as $facility)
                        <div class="flex flex-col md:flex-row gap-8 items-start">
                            <!-- Gambar -->
                            <div class="flex-shrink-0">
                                <div class="flex flex-wrap gap-4">
                                    <img src="{{  asset('storage/' . $facility->images)  }}" alt="Facility Image" class="w-80 h-60 object-cover rounded-lg shadow-md">
                                </div>
                            </div>

                            <!-- Teks -->
                            <div>
                                <h3 class="text-3xl font-semibold  text-gray-800">{{ $facility->name }}</h3>
                                <p class="text-lg text-gray-600 mt-4 max-w-4xl">{{ $facility->description }}</p>
                                <!--<p class="text-md text-gray-600 mt-2"><strong>Lokasi:</strong> {{ $facility->location }}</p>
                                <p class="text-md text-gray-600"><strong>Kapasitas:</strong> {{ $facility->capacity }}</p>
                                <p class="text-md text-gray-600"><strong>Status:</strong> {{ $facility->status }}</p>-->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </x-slot>
</x-articleapp-layout>
