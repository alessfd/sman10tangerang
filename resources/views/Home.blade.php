<x-app-layout>
    <x-slot name="slot">
        <!-- Two Image Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <img class="rounded-lg shadow-md" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
            <img class="rounded-lg shadow-md" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        </div>
    </x-slot>

    <x-slot name="page">
        <!-- Featured Posts Section -->
        @if ($posts->isEmpty())
            <p class="text-center text-lg text-gray-600 mt-24">No posts available at the moment.</p>
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
