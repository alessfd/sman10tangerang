<x-articleapp-layout>
    <body class="">
        <div class="mx-6 mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($years as $year)
            <div>
                <x-alumniyear-item :year="$year"></x-alumniyear-item>
            </div>
            @endforeach
        </div>
    </body>
</x-articleapp-layout>
