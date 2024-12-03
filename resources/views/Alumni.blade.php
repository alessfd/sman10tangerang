<x-articleapp-layout>
    <body>
        <div class="flex justify-center">
            <div class="w-3/5 mx-6 mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-5 xl:gap-x-8">
                @foreach ($alumni as $student)
                    <div>
                        <x-alumni-item :alumni="$student"></x-alumni-item>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</x-articleapp-layout>
