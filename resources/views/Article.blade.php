<x-articleapp-layout>



    <body class="text-justify w-50">

        <div class="w-50 ml-44" style="width: 50vw">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">{{$post->title}}</h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                {{ $post->getFormattedDate() }}
            </p>

            @if(isset($post->thumbnail))
             <img src="/storage/{{$post->thumbnail}}" style="max-height: 50vh" class="mb-12">
            @endif
            {!!$post->body!!}

        </div>
    </body>


</x-articleapp-layout>
