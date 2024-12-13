<div class="group relative min-w-96 shadow-md bg-white rounded-lg overflow-hidden">
    <!-- Image -->

    <div class="image-container h-52 w-42">

            @if (isset($alumni->photo))
                <img src="{{asset('storage/'. $alumni->photo) }}"class="h-full w-full object-fill rounded-lg">
            @else
                <img src="{{ asset('/img/avatar.jpg') }}"class="h-full w-full object-fill rounded-lg">
            @endif
    </div>


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
