<x-guest-layout>
    <x-slot name="title">{{ $data->title }} - Raksabumi Kandangwesi</x-slot>
    <header class="bg-primary-700 mt-14 lg:mt-16 py-4 lg:py-6 ">
        <div class="max-w-6xl mx-auto px-6 pt-1 text-gray-50">
            <h2 class="text-xl  lg:text-3xl font-bold text-center">{{ $data->title }}</h2>
        </div>
    </header>
    <div class="max-w-6xl mx-auto ">
        <div class="grid p-6 ">
            <article class="format-xl mx-auto prose-p:text-base leading-snug format ">
                {!! $data->content !!}
            </article>
        </div>
    </div>

</x-guest-layout>