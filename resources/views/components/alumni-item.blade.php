<div class="group relative">
    <a>
        @if (isset($alumni->photo))
            <img src="storage/{{ $alumni->photo }}"class="w-full object-cover">
        @else
            <img src="{{ asset('/img/avatar.jpg') }}"class="w-full object-cover">
        @endif
    </a>
    <div class="bg-green-500 opacity-50 flex flex-col justify-start p-2">
        <a class="text-center text-xl">
            {{ $alumni->id }}
        </a>
        <a class="text-center text-xl">
            {{ $alumni->name }}
        </a>
    </div>
</div>
