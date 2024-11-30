<!-- resources/views/visi-misi.blade.php -->
<x-visi-layout>
    <x-slot name="slot">
        <!-- Visi Misi Content Section -->
        <section class="w-full h-auto flex flex-col items-center px-3 py-6">
            <h1 class="text-4xl font-semibold text-gray-900 mb-6">VISI MISI SMA NEGERI 10 TANGERANG</h1>

            <div class="w-full max-w-4xl p-6 bg-white shadow-md rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">A. VISI</h2>
                <p class="text-lg text-gray-600">
                    {{$profiles->visi[0]}}
                </p>

                <h2 class="text-2xl font-semibold text-gray-800 mt-6 mb-4">B. MISI</h2>
                <ol class="list-decimal pl-6 text-lg text-gray-600">
                    @foreach ($profiles->misi as $misi)
                    <li>{{$misi}}</li>
                    @endforeach
                </ol>
            </div>
        </section>
    </x-slot>
</x-visi-layout>
