<x-articleapp-layout>



    <body class="text-justify w-50">

        <div class="w-50 ml-44" style="width: 50vw">
            <img src="/storage/{{$post->thumbnail}}" style="width: 50vw" class="mb-12">
            {!!$post->body!!}
        </div>
    </body>


</x-articleapp-layout>
