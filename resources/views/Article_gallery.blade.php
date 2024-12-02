<x-articleapp-layout>

    <body class="">
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($posts as $post)
            <div>
                <x-post-item :post="$post"></x-post-item>
            </div>
            @endforeach
        </div>
        </div>
    </body>



</x-articleapp-layout>
