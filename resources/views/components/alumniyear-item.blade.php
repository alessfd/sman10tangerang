<div class="group relative">
    <!-- Article Image -->
    <a href="/alumni/{{ $year->year }}" class="hover:opacity-75">
        @if (isset($post->thumbnail))
            <img src="storage/{{ $post->thumbnail }}"class="w-full h-32 object-cover">
        @else
            <img src="https://placeholder.pics/svg/600"class="w-full h-32 object-cover">
        @endif
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <a href="/alumni/{{ $year->year }}" class="text-3xl font-bold hover:text-gray-700 pb-4">
            {{ $year->year }}
        </a>
    </div>
</div>
