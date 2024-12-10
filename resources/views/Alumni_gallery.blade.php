<x-ArticleApp-Layout>
    <div class="bg-green-600 text-white py-6">
        <div class="container text-center mx-auto px-6 lg:px-20">
            <h1 class="text-2xl md:text-3xl font-bold">ALUMNI SMAN 10 TANGERANG</h1>
        </div>
    </div>
    @if ($years->isEmpty())
        <p class="text-center text-lg text-gray-600 mt-24">Tidak ada data alumni yang tersedia.</p>
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
</x-ArticleApp-Layout>
