<x-articleapp-layout>
<div class="bg-gray-100 py-10">
        <div class="container mx-auto">
            <!-- Headmaster Section -->
            <div class="mb-10">
                <div class="flex flex-wrap lg:flex-nowrap items-center gap-6">
                    <!-- Headmaster Card -->
                    <div class="flex-shrink-0">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden w-48">
                            <div class="h-48 bg-gray-300 flex items-center justify-center">
                                <img 
                                    src="{{ asset('storage/default/default-avatar-icon-of-social-media-user-vector.jpg') }}" 
                                    alt="Headmaster Avatar" 
                                    class="h-full w-full object-cover"
                                >
                            </div>
                            <div class="p-4 text-center">
                                <h1 class="text-lg font-bold">Headmaster Name</h1>
                                <p class="text-sm text-gray-600">School Headmaster</p>
                            </div>
                        </div>
                    </div>

                    <!-- Speech Box -->
                    <div class="flex-grow bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-xl font-bold mb-2">Message from the Headmaster</h2>
                        <p class="text-sm text-gray-700">
                            "Welcome to our school! We are committed to providing a nurturing environment where every student can thrive academically, socially, and emotionally. Together, let's shape the future!"
                        </p>
                    </div>
                </div>
            </div>

            <!-- Teachers Section -->
            <h2 class="text-2xl font-bold text-center mb-6">Our Teachers</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                @foreach ($teachers as $teacher)
                    <div class="card bg-white shadow-md p-4 rounded-lg">
                        <div class="image-container h-40 w-40 mx-auto">
                            <img 
                                src="{{ asset('storage/' . $teacher->photo) }}" 
                                alt="{{ $teacher->name }}" 
                                class="h-full w-full object-cover rounded-full" 
                            />
                        </div>
                        <h3 class="text-center mt-2 font-semibold">{{ $teacher->name }}</h3>
                        <p class="text-center text-sm text-gray-600">{{ $teacher->job }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-articleapp-layout>
