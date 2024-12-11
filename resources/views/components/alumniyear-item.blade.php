<div class="group relative">
    <div class="bg-white flex flex-col justify-start p-6">
        <a href="/alumni/{{ $year->year }}">
            @if (isset($alumni->photo))
                <img src="storage/{{ $alumni->photo }}"class="w-full object-cover">
            @else
                <img src="{{ asset('/img/background-alumni.jpeg') }}"class="w-full object-cover">
            @endif
        </a>
        <a class="text-3xl font-bold hover:text-gray-700 pb-4 text-center">
            {{ $year->year }}
        </a>
    </div>
</div>
