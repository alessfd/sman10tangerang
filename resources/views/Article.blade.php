<x-articleapp-layout>



    <body class="text-justify w-50">

        <div class="w-50 ml-44" style="width: 50vw">
            @if(isset($post->thumbnail))
            <img src="/storage/{{$post->thumbnail}}" style="width: 50vw" class="mb-12">
            @endif
            {!!$post->body!!}

        </div>
    </body>


</x-articleapp-layout>
