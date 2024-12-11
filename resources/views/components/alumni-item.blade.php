<div class="group relative min-w-96 shadow-md bg-white rounded-lg overflow-hidden">
    <!-- Image -->
    @if (isset($alumni->photo))
        <img src="{{asset('storage/'. $alumni->photo) }}"class="w-full object-cover">
    @else
        <img src="{{ asset('/img/avatar.jpg') }}"class="w-full object-cover">
    @endif

    <!-- ID Name -->
    <div class="bg-white flex flex-col justify-start p-auto">
        <a class="text-center text-xl md:text-lg">
            {{ $alumni->id }}
        </a>
        <a class="text-center text-xl md:text-lg">
            {{ $alumni->name }}
        </a>
    </div>
</div>
