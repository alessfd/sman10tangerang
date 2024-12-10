<x-app-layout>
    <x-slot name="slot">
        <!-- Facilities Section -->
        <div class="bg-white p-8 rounded-lg shadow-md mb-8">
            <h2 class="text-3xl font-semibold text-gray-900 mb-4 text-center">Fasilitas Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach ($facilities->take(2) as $facility)
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <img 
                            src="{{ asset('storage/' . $facility->images) }}" 
                            alt="{{ $facility->name }}" 
                            class="w-full h-48 object-cover rounded-md mb-4"
                        >
                        <h3 class="text-xl font-semibold text-gray-800">{{ $facility->name }}</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ Str::limit($facility->description, 100) }}</p>
                        <a href="/facilities" class="text-blue-500 hover:text-blue-700 mt-4 inline-block">Read More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </x-slot>

    <x-slot name="page">
        <!-- Featured Posts Section -->
        @if ($posts->isEmpty())
            <p class="text-center text-lg text-gray-600 mt-24">Tidak ada berita tersedia pada saat ini.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mx-auto max-w-7xl p-6">
                @foreach ($posts->take(4) as $post)
                    <div>
                        <x-post-item :post="$post"></x-post-item>
                    </div>
                @endforeach
            </div>
        @endif
    </x-slot>
</x-app-layout>
