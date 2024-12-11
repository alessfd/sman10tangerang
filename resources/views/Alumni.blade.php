<x-ArticleApp-Layout>
    <body>
        <div class="max-w-screen-lg mt-6 px-6 mx-auto">
            <a href="/alumni">Alumni</a> > <a>{{ $year }}</a>
            <p class="text-center text-6xl font-bold mb-6">Angkatan {{ $year }}</p>
            <div class="flex justify-center">
                <div class="mx-auto my-6 grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-3 lg:grid-cols-5 xl:gap-x-8">
                    @foreach ($alumni as $student)
                        <x-alumni-item :alumni="$student"></x-alumni-item>
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
