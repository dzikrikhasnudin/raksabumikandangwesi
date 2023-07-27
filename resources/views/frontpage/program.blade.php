<x-guest-layout>
    <x-slot name="title">Program - Raksabumi Kandangwesi</x-slot>
    <header class="bg-primary-700 mt-14 lg:mt-16 py-4 lg:py-6 ">
        <div class="max-w-6xl mx-auto px-6 pt-1 text-gray-50">
            <h2 class="text-xl  lg:text-3xl font-bold text-center">Program</h2>
        </div>
    </header>
    <div class="max-w-6xl mx-auto ">
        <div class="grid p-3">
            @foreach ($posts as $data)
            <section class="bg-white ">
                <div
                    class="gap-8 items-center py-4 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-12 lg:px-6">
                    <a href="/program/{{ $data->slug }}">
                        <img class="w-full aspect-video object-cover rounded-lg hover:scale-[102%] transition duration-300"
                            src="{{ $data->thumbnail }}" alt="{{ $data->title }}">
                    </a>
                    <div class="mt-4 md:mt-0">
                        <a href="/program/{{ $data->slug }}">
                            <h2
                                class="mb-4 text-2xl tracking-tight font-extrabold text-stone-900 hover:text-primary-600 transition duration-300">
                                {{
                                $data->title }}</h2>
                        </a>
                        <p class="mb-6 font-normal text-gray-500 md:text-lg line-clamp-3 ">{{ $data->description }}
                        </p>
                        <a href="/program/{{ $data->slug }}"
                            class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Baca Selengkapnya
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>

            <hr class="divider">
            @endforeach
        </div>
    </div>
</x-guest-layout>