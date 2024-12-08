<x-articleapp-layout>
    @if ($years->isEmpty())
        <p class="text-center text-lg text-gray-600 mt-24">No data available at the moment.</p>
    @else
        <body class="">
            <div class="mx-6 mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($years as $year)
                <div>
                    <x-alumniyear-item :year="$year"></x-alumniyear-item>
                </div>
                @endforeach
            </div>
        </body>
    @endif
</x-articleapp-layout>
