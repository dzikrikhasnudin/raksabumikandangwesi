<x-guest-layout>
    <x-slot name="title">{{ $data->title }}</x-slot>
    <div class="max-w-6xl mx-auto mt-14 lg:mt-16">
        <div class="grid p-6 ">
            {{-- Breadcrumb --}}
            <x-breadcrumb :menu="[
                    route('home') => 'Home',
                    route($title) => ucwords($title)]">
            </x-breadcrumb>
            <article
                class="mx-auto prose prose-xl prose-lead:leading-snug prose-h3:my-1 prose-img:object-cover prose-img:rounded prose-img:w-full prose-img:aspect-video ">
                <div class="mx-auto mb-4 leading-3">
                    <h2 class="text-3xl font-bold mt-3 md:mt-6">{{ $data->title }}</h2>
                    <small>Admin Raksabumi, {{ $data->created_at->format('d F Y') }}</small>
                    <img src="{{ $data->thumbnail }}" alt="">
                </div>
                {!! $data->content !!}
            </article>
        </div>

    </div>
    <aside aria-label="Related articles" class="py-8 lg:py-16 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-6xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">{{ $title == 'program' ? 'Program Lainnya'
                : 'Artikel Lainnya' }}</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4 justify-center">
                @foreach ($relatedArticles as $related)
                <article class="max-w-xs">
                    <a href="#">
                        <img src="{{ $related->thumbnail }}" class="w-full aspect-video object-cover mb-5 rounded-lg"
                            alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-lg font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#" class="line-clamp-2">{{ $related->title }}</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400 line-clamp-3">{{ $related->description }}
                    </p>
                    @if ($title == 'program')
                    <a href="{{ route('detail', ['category' => $title, 'slug' => $related->slug]) }}"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Baca selengkapnya
                    </a>
                    @else
                    <a href="{{ route('detail', ['category' => $related->category, 'slug' => $related->slug]) }}"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Baca selengkapnya
                    </a>
                    @endif
                </article>
                @endforeach
            </div>
        </div>
    </aside>
</x-guest-layout>