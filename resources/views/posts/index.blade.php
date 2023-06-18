<div class="md:ml-64">
    <x-slot name="title">Semua Postingan</x-slot>
    <x-slot name="sidebar">
        @include('layouts.sidebar')
    </x-slot>

    <div class="mt-16">
        <div class="flex justify-between items-center bg-white px-4 py-6 rounded-lg border border-gray-100  h-12 mb-4">
            <h2 class="text-xl font-semibold">Semua Postingan</h2>
            <a href="{{ route('post.create') }}">
                <x-button class="bg-yellow-500 hover:bg-yellow-600 text-white">Buat Postingan</x-button>
            </a>
        </div>
        <div class="p-4 bg-white border-b sm:rounded-lg border-gray-100 mb-4">
            <div>
                <div class="relative mb-4">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-amber-300 focus:border-amber-300 "
                        placeholder="Cari Berita, Artikel...">
                </div>
                @forelse ($posts as $post)
                <article x-data="{ open: false }"
                    class="cursor-pointer mb-4 relative overflow-visible md:overflow-hidden border border-stone-200 p-2 grid grid-cols-6 items-start rounded-md gap-2 hover:shadow-md transition-all duration-300">
                    <div class="p-2 text-md col-span-5 text-stone-800">
                        <a href="{{ route('post.edit', $post) }}">
                            <h2 class="line-clamp-2 font-semibold"><span class="italic">{{ $post->status == 'draft' ?
                                    'Draft - ' : '' }}</span>{{
                                ucwords($post->title) }}</h2>
                            <p class="hidden lg:line-clamp-2 text-sm text-stone-600">{{ $post->description }}</p>
                        </a>
                        <div class="pt-2 flex gap-2 items-center flex-wrap">
                            <a href="#">
                                <small
                                    class="border border-stone-400 text-stone-600 rounded-lg px-2 py-1 hover:bg-yellow-500 hover:border-yellow-600 hover:text-white transition-all duration-300">{{
                                    ucwords($post->category) }}</small>
                            </a>
                            <small class="text-stone-600 ">Dipublikasikan {{ $post->created_at->diffForHumans() }}
                            </small>
                        </div>
                    </div>
                    <div class="md:hidden action ml-auto mr-2 pt-2 text-stone-600 rounded-full h-10 w-10 "
                        @click="open = ! open" :class="{ 'bg-stone-200 transition duration-300': open, '': !open }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </div>

                    <div class="hidden md:flex m-auto  text-stone-600 ">
                        {{-- Lihat --}}
                        <a href="#" target="_blank"
                            class="py-2 flex hover:bg-stone-200 hover:rounded-full text-stone-600 items-center active:bg-amber-300">
                            <span class="mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        {{-- Edit --}}
                        <a href="{{ route('post.edit', $post) }}"
                            class="py-2 flex hover:bg-stone-200 hover:rounded-full text-stone-600 items-center active:bg-amber-300">
                            <span class="mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        {{-- Hapus --}}
                        <form action="{{ route('post.destroy', $post) }}" method="POST" role="alert"
                            alert-text="Yakin Hapus Data?">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="py-2 flex hover:bg-stone-200 hover:rounded-full text-stone-600 items-center active:bg-amber-300">
                                <span class="mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>

                    {{-- Responsive --}}
                    <nav x-show="open" x-transition.duration.300ms @click.outside="open = false"
                        class="action border border-stone-200 absolute bg-white row-start-2 col-start-4 cols-span-5 w-full  rounded drop-shadow-lg shadow-stone-800 py-2 -mt-8 z-50">
                        <a href="#" target="_blank" class="py-2 flex text-stone-600 items-center active:bg-amber-200">
                            <span class="mx-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p>Lihat</p>
                        </a>
                        <a href="#" class="py-2 flex text-stone-600 items-center active:bg-amber-200">
                            <span class="mx-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p>Edit</p>
                        </a>
                        <form action="#" method="POST" role="alert" alert-text="Yakin Hapus Data?">
                            @csrf
                            @method('delete')
                            <button type="submit" class="py-2 flex text-stone-600 items-center active:bg-amber-200">
                                <span class="mx-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <p>Hapus</p>
                            </button>
                        </form>
                    </nav>
                </article>
                @empty
                <p class="text-center py-5">Belum ada postingan</p>
                @endforelse

            </div>

        </div>
    </div>

    @push('script')
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // event delete category
            $("form[role='alert']").submit(function(event) {
                event.preventDefault();
                Swal.fire({
                    title: "Hapus Postingan",
                    text: $(this).attr('alert-text'),
                    icon: 'warning',
                    allowOutsideClick: false,
                    showCancelButton: true,
                    cancelButtonText: "Batal",
                    reverseButtons: true,
                    confirmButtonText: "Hapus",
                    }).then((result) => {
                    if (result.isConfirmed) {
                        event.target.submit();
                    }
                });
            })
        })
    </script>
    @endpush
</div>