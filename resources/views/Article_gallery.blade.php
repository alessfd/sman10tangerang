<x-articleapp-layout>
    <body>
        <div class="flex items-center justify-between px-10 lg:px-20 mt-6">
            <!-- Filter Button -->
            <button id="toggleFilter" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                Filter
            </button>

            <!-- Search Bar -->
            <form method="GET" action="{{ route('article') }}" class="flex items-center">
                <input
                    type="text"
                    name="search"
                    placeholder="Search articles..."
                    class="border border-gray-300 rounded-l px-4 py-2 focus:outline-none focus:ring focus:border-blue-300"
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
        <div id="filterOptions" class="hidden mt-4 px-10 lg:px-20">
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

        <!-- Articles -->
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 px-10 lg:px-20">
            @foreach ($posts as $post)
                <div>
                    <x-post-item :post="$post"></x-post-item>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-6 px-10 lg:px-20">
            {{ $posts->withQueryString()->links() }}
        </div>
    </body>

    <!-- Add Script -->
    <script>
        document.getElementById('toggleFilter').addEventListener('click', function () {
            const filterOptions = document.getElementById('filterOptions');
            if (filterOptions.classList.contains('hidden')) {
                filterOptions.classList.remove('hidden');
                filterOptions.classList.add('animate__animated', 'animate__fadeInDown');
            } else {
                filterOptions.classList.add('hidden');
                filterOptions.classList.remove('animate__animated', 'animate__fadeInDown');
            }
        });
    </script>
</x-articleapp-layout>
