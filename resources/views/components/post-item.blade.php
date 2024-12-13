<div class="group relative">
    <!-- Article Image -->
    <a href="/article/{{ $post->published_at->format('Y-m-d') }}/{{ $post->slug }}" class="hover:opacity-75">
        @if (isset($post->thumbnail))
            <img src="{{asset('storage/' . $post->thumbnail )}}"class="w-full h-32 object-cover">
        @else
            <img src="https://placeholder.pics/svg/600"class="w-full h-32 object-cover">
        @endif
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        @foreach ($post->categories as $category)
            <a href="/article/{{ $post->published_at->format('Y-m-d') }}/{{ $post->slug }}" class="text-blue-700 text-sm font-bold uppercase pb-4">
                {{ $category->title }}
            </a>
        @endforeach
        <a href="/article/{{ $post->published_at->format('Y-m-d')}}/{{ $post->slug }}" class="text-3xl font-bold hover:text-gray-700 pb-4">
            {{ $post->title }}
        </a>

        <p href="/article/{{ $post->published_at->format('Y-m-d')}}/{{ $post->slug }}" class="text-sm pb-3">
            Published on {{ $post->getSimpleFormattedDate() }}
        </p>
        <!-- <a href="/article/{{ $post->slug }}" class="pb-6">
                        {{ $post->shortBody() }}
                    </a> -->
        <a href="/article/{{ $post->published_at->format('Y-m-d') }}/{{ $post->slug }}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                class="fas fa-arrow-right"></i></a>
    </div>


</div>
