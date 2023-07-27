<x-guest-layout>
    <x-slot name="title">{{ $data->title ?? 'Oops' }} - Raksabumi Kandangwesi</x-slot>
    <header class="bg-primary-700 mt-14 lg:mt-16 py-4 lg:py-6 ">
        <div class="max-w-6xl mx-auto px-6 pt-1 text-gray-50">
            <h2 class="text-3xl  lg:text-4xl font-bold text-center">{{ $data->title ?? 'Oops!' }}</h2>
        </div>
    </header>
    <div class="max-w-6xl mx-auto ">
        <div class="grid p-6 ">
            <article
                class="mx-auto prose prose-lg lg:prose-xl prose-lead:leading-snug prose-h3:my-2  prose-img:object-cover prose-img:rounded prose-img:w-full prose-img:aspect-video ">
                {!! $data->content ?? 'Oops' !!}
            </article>
        </div>
    </div>

</x-guest-layout>