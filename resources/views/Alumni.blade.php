<x-ArticleApp-Layout>
    <body>
        <div class="w-3/5 mt-6 mx-auto">
            <a href="/alumni">Alumni</a> > <a>{{ $year }}</a>
            <p class="text-center text-6xl font-bold mb-6">Angkatan {{ $year }}</p>
            <div class="flex justify-center">
                <div class="mx-6 my-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-8">
                    @foreach ($alumni as $student)
                        <div>
                            <x-alumni-item :alumni="$student"></x-alumni-item>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex-col mb-6">
                {{ $alumni->links() }}
                {{-- {{ dump($alumni) }} --}}
            </div>
        </div>
    </body>
</x-ArticleApp-Layout>
