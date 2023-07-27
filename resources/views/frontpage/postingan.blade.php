<x-guest-layout>
    <x-slot name="title">{{ $title }} - Raksabumi Kandangwesi</x-slot>
    <header class="bg-primary-700 mt-14 lg:mt-16 py-4 lg:py-5 ">
        <div class="max-w-6xl mx-auto px-6 pt-1 text-gray-50">
            <h2 class="text-xl  lg:text-3xl font-bold text-center capitalize">{{ $title }}</h2>
        </div>
    </header>
    <div class="max-w-6xl mx-auto p-4 lg:p-5">
        <div class="grid lg:grid-cols-3">
            <div class="col-span-2 mt-2 md:mt-6 mb-4 lg:pr-4">
                {{-- Breadcrumb --}}
                <x-breadcrumb :menu="[
                   route('home') => 'Home',
                   ''  => 'Kategori',
                   strtolower($title) => $title]">
                </x-breadcrumb>
                {{-- <h2 class="text-gray-900 text-2xl lg:text-3xl font-bold my-4 text-center lg:text-left">{{ $title }}
                </h2> --}}
                {{-- <form class="my-4 lg:mx-5 lg:hidden">
                    @include('admin._search')
                </form> --}}
                @forelse ($posts as $data)
                <article class="grid grid-cols-3 mt-4 mb-3 items-center gap-2">
                    <figure class="rounded overflow-hidden">
                        <a href="#">
                            <img src="{{ $data->thumbnail }}" alt="{{ $data->judul }}"
                                class=" aspect-square sm:aspect-video w-full object-cover hover:scale-110 transition-all duration-300 ease-in-out">
                        </a>
                    </figure>
                    <div class="col-span-2 p-2 lg:p-4">
                        <a href="{{ route('detail', ['category' => request()->path(), 'slug' => $data->slug]) }}">
                            <h3
                                class="line-clamp-2 font-bold text-md lg:text-lg text-gray-900 hover:text-primary-500 transition duration-300 ease-in-out">
                                {{ $data->title }}</h3>
                        </a>
                        <p class="lg:my-2 hidden lg:block"><span class="line-clamp-2">{{ $data->description }}</span>
                        </p>
                        <small class="text-gray-500 flex gap-1 items-center">
                            <svg class="h-4 w-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <circle cx="12" cy="12" r="9" />
                                <polyline points="12 7 12 12 15 15" />
                            </svg>
                            {{ $data->created_at->diffForHumans() }}
                        </small>
                        <a href="{{ route('detail', ['category' => request()->path(), 'slug' => $data->slug]) }}"
                            class="inline-block my-2 text-white text-sm lg:text-base bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-md px-4 py-1 text-center md:mr-0 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 transition-all duration-300">
                            Baca selengkapnya
                        </a>
                    </div>
                </article>

                <hr class="divider">
                @empty
                <div class="text-md text-center my-5">
                    <figure class="w-full lg:w-1/2 mx-auto">
                        <img src="{{ asset('assets/img/not-found.png') }}" alt="">
                    </figure>
                    <h3 class="text-2xl text-gray-900 font-bold">Belum ada data</h3>
                </div>
                @endforelse

                <div class="pagination mt-4">
                    {{ $posts->links() }}
                </div>

            </div>
            <aside class="border-t lg:border-none  py-3">

                <div class="latest-news w-full lg:shadow-md lg:p-5 mt-3">
                    {{-- <form class="mt-2 mb-4 hidden lg:block ">
                        @include('app._search')
                    </form> --}}
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Postingan Terbaru</h3>
                    @foreach ($latest as $data)
                    <div class="grid grid-cols-3 gap-2 mb-3 items-center">
                        <figure class="rounded overflow-hidden aspect-video">
                            <a href="{{ route('detail', ['category' => $data->category, 'slug' => $data->slug]) }}">
                                <img src="{{ $data->thumbnail }}" alt="{{ $data->judul }}"
                                    class="w-full h-full object-cover h-30 w-30 hover:scale-110 transition-all duration-300 ease-in-out">
                            </a>
                        </figure>
                        <div class="col-span-2">
                            <a href="{{ route('detail', ['category' => $data->category, 'slug' => $data->slug]) }}">
                                <h4
                                    class="line-clamp-2 font-medium text-gray-800 hover:text-primary-500 transition duration-300 ease-in-out">
                                    {{ $data->title }}</h4>
                            </a>
                            <small class="text-gray-500 flex gap-1 items-center">
                                <svg class="h-4 w-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="12" cy="12" r="9" />
                                    <polyline points="12 7 12 12 15 15" />
                                </svg>
                                {{ $data->created_at->format('d F Y') }}
                            </small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </aside>

        </div>
    </div>
</x-guest-layout>