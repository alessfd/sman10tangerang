<x-ArticleApp-layout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Headmaster Section -->
            <div class="mb-10">
                <div class="flex flex-wrap lg:flex-nowrap items-center gap-6">
                    <!-- Headmaster Card -->
                    <div class="flex-shrink-0 w-full sm:w-48 lg:w-48 xl:w-60">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full">
                            <div class="h-48 bg-gray-300 flex items-center justify-center">
                                <img
                                    src="{{ asset('storage/' . $headmaster->photo) }}"
                                    alt="{{ $headmaster->name }}"
                                    class="h-full w-full object-cover"
                                >
                            </div>
                            <div class="p-4 text-center">
                                <h1 class="text-lg font-bold text-gray-800">{{ $headmaster->name }}</h1>
                                <p class="text-sm text-gray-600"> {{ $headmaster->jabatan }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Speech Box -->
                    <div class="flex-grow bg-white rounded-lg shadow-lg p-6 mt-6 lg:mt-0">
                        <h2 class="text-xl font-bold mb-2 text-gray-800">Message from the Headmaster</h2>
                        <p class="text-sm text-gray-700 leading-relaxed">
                            "Welcome to our school! We are committed to providing a nurturing environment where every student can thrive academically, socially, and emotionally. Together, let's shape the future!"
                        </p>
                    </div>
                </div>
            </div>

            <!-- Teachers Section -->
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Our Teachers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($teachers as $teacher)
                    <div class="card bg-white shadow-md p-6 rounded-lg text-center">
                        <div class="image-container h-40 w-40 mx-auto mb-4">
                            <img
                                src="{{ asset('storage/' . $teacher->photo) }}"
                                alt="{{ $teacher->name }}"
                                class="h-full w-full object-cover rounded-full"
                            />
                        </div>
                        <h3 class="font-semibold text-gray-800">{{ $teacher->name }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-ArticleApp-layout>
