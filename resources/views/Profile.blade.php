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
            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-4">
                @foreach (range(1, 18) as $placeholder) {{-- Replace this with real data later --}}
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-36 bg-gray-300 flex items-center justify-center">
                            <img 
                                src="{{ asset('storage/default/default-avatar-icon-of-social-media-user-vector.jpg') }}" 
                                alt="Default Avatar" 
                                class="h-full w-full object-cover"
                            >
                        </div>
                        <div class="p-3">
                            <h2 class="text-sm font-bold">Teacher Name</h2>
                            <p class="text-xs text-gray-600">Subject Placeholder</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-articleapp-layout>
