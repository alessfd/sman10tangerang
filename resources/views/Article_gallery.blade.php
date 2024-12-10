<x-ArticleApp-layout>
    <body class="bg-gray-50">

        <div class="bg-green-600 text-white py-6">
            <div class="container text-center mx-auto px-6 lg:px-20">
                <h1 class="text-2xl md:text-3xl font-bold">BERITA SMAN 10 TANGERANG</h1>
            </div>
        </div>

        @if ($posts->isEmpty())
        <!-- No Posts Available Message -->
        <div class="text-center py-20">
            <p class="text-lg font-medium text-gray-600">Tidak ada berita tersedia pada saat ini.</p>
        </div>
        @else
        <!-- Page Title -->

        <div class="container mx-auto px-6 lg:px-20 py-10">
            <!-- Filter and Search -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-4">
                <!-- Filter Button -->
                <button id="toggleFilter" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    Filter
                </button>

                <!-- Search Bar -->
                <form method="GET" action="{{ route('article') }}" class="flex items-center w-full lg:w-auto">
                    <input
                        type="text"
                        name="search"
                        placeholder="Search articles..."
                        class="border border-gray-300 rounded-l px-4 py-2 w-full lg:w-auto focus:outline-none focus:ring focus:border-blue-300"
                        value="{{ request('search') }}"
                    >
                    <button
                        type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-r hover:bg-blue-600 transition">
                        Search
                    </button>
                </form>
            </div>

            <!-- Filter Options -->
            <div id="filterOptions" class="hidden mt-4">
                <form method="GET" action="{{ route('article') }}">
                    <div class="flex flex-wrap gap-4">
                        @foreach ($categories as $category)
                        <label class="inline-flex items-center">
                            <input
                                type="checkbox"
                                name="categories[]"
                                value="{{ $category->id }}"
                                class="form-checkbox h-5 w-5 text-blue-600"
                                {{ in_array($category->id, request('categories', [])) ? 'checked' : '' }}
                            >
                            <span class="ml-2 text-gray-700">{{ $category->title }}</span>
                        </label>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        <button
                            type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                            Apply Filter
                        </button>
                    </div>
                </form>
            </div>

            <!-- Articles Grid -->
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
                @foreach ($posts as $post)
                <x-post-item :post="$post"></x-post-item>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-10">
                {{ $posts->withQueryString()->links() }}
            </div>
        </div>
        @endif
    </body>

    <!-- Add Script -->
    <script>
        document.getElementById('toggleFilter').addEventListener('click', function () {
            const filterOptions = document.getElementById('filterOptions');
            filterOptions.classList.toggle('hidden');
        });
    </script>
</x-ArticleApp-layout>
