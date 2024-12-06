<x-articleapp-layout>
    <body class="text-justify">

        <div class="container mx-auto px-6 lg:px-20 flex flex-col gap-10">
            <!-- Main Content -->
						<div>
								<h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">{{$post->title}}</h1>
								<p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
										{{ $post->getFormattedDate() }}
								</p>
						</div>
						
            <div class="lg:w-3/4">
                @if(isset($post->thumbnail))
                <img src="{{ asset('storage/' . $post->thumbnail) }}" style="max-height: 50vh" class="w-full mb-12 rounded-lg">
                @endif
                <div>{!! $post->body !!}</div>
            </div>

            <!-- Sidebar -->
            <div class="lg:w-1/4">
                <!-- Other Articles -->
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h2 class="text-xl font-bold mb-4">Other Articles</h2>
                    <div class="space-y-6">
                        @foreach ($otherArticles as $otherArticle)
                        <div class="bg-white shadow p-4 rounded-lg flex gap-4 hover:shadow-lg">
                            <!-- Thumbnail -->
                            <img src="{{ asset('storage/' . $otherArticle->thumbnail) }}" alt="{{ $otherArticle->title }}" class="w-20 h-20 object-cover rounded-lg">

                            <!-- Article Info -->
                            <div class="flex flex-col justify-between">
                                <div>
                                    <a href="{{ route('articleapp', $otherArticle->slug) }}" class="text-blue-600 font-semibold hover:underline">
                                        {{ $otherArticle->title }}
                                    </a>
                                </div>
                                <p class="text-sm text-gray-600 mt-1">
                                    Published: {{ \Carbon\Carbon::parse($otherArticle->published_at)->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-articleapp-layout>
