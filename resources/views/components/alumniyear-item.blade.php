<div class="group relative">
    <div class="bg-white flex flex-col justify-start p-6">
        <a href="/alumni/{{ $year->year }}">
            @if (isset($year->photo))
                <img src="{{asset('storage/'. $year->photo) }}"class="w-76 h-42 object-cover">
            @else
                <img src="{{ asset('/img/background-alumni.jpeg') }}"class="w-76 h-60 object-cover">
            @endif
            <a class="text-3xl font-bold hover:text-gray-700 pb-4 text-center" href="/alumni/{{ $year->year }}">
                {{ $year->year }}
            </a>
        </a>
    </div>
</div>
