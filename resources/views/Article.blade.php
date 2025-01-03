<x-ArticleApp-Layout>
    <body class="text-justify bg-gray-50">
        <div class="container mx-auto px-6 lg:px-20 py-10 flex flex-col lg:flex-row gap-10">
            <!-- Main Content -->
            <div class="lg:w-3/4">
                <a href="/article">Article</a> > <a>Detail</a>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <!-- Display Categories -->
                    @if($post->categories->isNotEmpty())
                        <div class="mb-2">
                            @foreach($post->categories as $category)
                                <a href="{{ route('article', ['categories[]' => $category->id]) }}"
                                    class="text-sm font-medium text-blue-600 hover:underline mr-2">
                                    {{ $category->title }}
                                </a>
                            @endforeach
                        </div>
                    @endif
                    <h1 class="text-3xl font-extrabold leading-tight text-gray-900 md:text-4xl lg:text-3xl">
                        {{ $post->title }}
                    </h1>
                    <p class="text-sm font-medium text-gray-500 mt-2">
                        Published on: {{ $post->getFormattedDate() }}
                    </p>

                    @if(isset($post->thumbnail))
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                        class="w-full max-h-[50vh] object-cover rounded-lg mt-6">
                    @endif

                    <div class="mt-6 text-gray-800 leading-relaxed">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            @if($otherArticles->count() > 0)
            <div class="lg:w-1/4 col-span-1">
                <!-- Other Articles -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Berita Lainnya</h2>
                    <div class="space-y-6">
                        @foreach ($otherArticles as $otherArticle)
                        <div class="bg-gray-100 p-4 rounded-lg flex gap-4 hover:bg-gray-200">
                            <!-- Thumbnail -->
                            <img src="{{ asset('storage/' . $otherArticle->thumbnail) }}"
                                alt="{{ $otherArticle->title }}"
                                class="w-20 h-20 object-cover rounded-lg shadow">

                            <!-- Article Info -->
                            <div class="flex flex-col justify-between w-full">
                                <a href="{{ route('articleapp', ['date' => $otherArticle->published_at->format('Y-m-d'), 'slug' => $otherArticle->slug]) }}"
                                    class="text-blue-600 font-semibold hover:underline">
                                    <!-- Truncated Title -->
                                    {{ \Illuminate\Support\Str::words($otherArticle->title, 5, '...') }}
                                </a>
                                <p class="text-sm text-gray-500 mt-1">
                                    Published: {{ \Carbon\Carbon::parse($otherArticle->published_at)->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </body>
</x-ArticleApp-Layout>
