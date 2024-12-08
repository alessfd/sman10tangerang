<x-app-layout>
    <x-slot name="slot">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-7">
            <div>
                <img class="max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
            </div>
            <div>
                <img class="max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>
        </div>
    </x-slot>

    <x-slot name="page">
        <!-- Posts Section -->
            @if ($posts->isEmpty())
                <!-- No Posts Available Message -->
                <p class="text-center text-lg text-gray-600 mt-24">No posts available at the moment.</p>
            @else
                <div class="grid grid-cols-4 lg:gap-24 gap-8 m-8 md:m-12">
                    @foreach ($posts->take(4) as $post)
                        <div>
                            <x-post-item :post="$post"></x-post-item>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Pagination -->
            <!-- <div class="flex items-center py-8">
                <a href="#"
                    class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#"
                    class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#"
                    class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next
                    <i class="fas fa-arrow-right ml-2"></i></a>
            </div> -->
    </x-slot>
</x-app-layout>
