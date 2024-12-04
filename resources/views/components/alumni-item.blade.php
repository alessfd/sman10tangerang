<div class="group relative">
    <!-- Article Image -->
    <a>
        @if (isset($alumni->photo))
            <img src="storage/{{ $alumni->photo }}"class="w-full object-cover">
        @else
            <img src="https://placeholder.pics/svg/600"class="w-full object-cover">
        @endif
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <a class="text-center text-xl">
            {{-- {{ $alumni->id }} --}}
            00000106265
        </a>
        <a class="text-center text-xl">
            {{ $alumni->name }}
        </a>
    </div>
</div>
