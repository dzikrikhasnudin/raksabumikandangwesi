<div class="md:ml-64">
    <x-slot name="title">Video</x-slot>
    <x-slot name="sidebar">
        @include('layouts.sidebar')
    </x-slot>

    <div class="mt-16">
        <div class="p-4 bg-white border-b sm:rounded-lg border-gray-100 mb-4">
            @if (session()->has('message'))
            <div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Berhasil!</span> {{ session('message') }}
                </div>
            </div>
            @endif

            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Video</h2>
            </div>
            <hr class="divide-x-2 my-4">

            @if ($statusUpdate)
            <livewire:update-video :videos="$videos"></livewire:update-video>
            @else
            <livewire:create-video></livewire:create-video>
            @endif
            <div class="flex gap-2 mb-4">
                {{-- Pagination Settings --}}
                <x-pagination-settings></x-pagination-settings>
                {{-- Search Box --}}
                <x-search-box placeholder="Cari Video..."></x-search-box>
            </div>

            <hr class="my-4">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-3 py-3" width="50">
                                No.
                            </th>
                            <th scope="col" class="pl-0 pr-3 lg:px-6 py-3">
                                Nama Album
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tautan Video
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($videos as $index => $video)
                        <tr class=" bg-white border-b hover:bg-gray-50 cursor-pointer">
                            <td class="px-3 py-2 text-center" width="50">
                                {{ 1 + $index++ }}
                            </td>
                            <th scope="row" class="pl-0 pr-3 lg:px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $video->title }}
                            </th>
                            <td class="px-6 py-2">
                                {{ $video->video }}
                            </td>
                            <td class="px-6 py-2 text-right">
                                <div class="flex m-auto  text-stone-600 ">
                                    {{-- Lihat --}}
                                    <a href="#"
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
                                    <button wire:click="getVideo({{ $video->id }})"
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
                                    </button>
                                    {{-- Hapus --}}
                                    @php
                                    $videoId = $video->id;
                                    @endphp
                                    <button wire:click="$emit('triggerDelete',{{ $videoId }})"
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
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr class=" file:bg-white border-b ">
                            <td colspan="4" class=" px-6 py-4 text-center">
                                Belum ada video
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            <div class="mt-3 px-2">
                {{ $videos->links() }}
            </div>
        </div>
    </div>
</div>

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', videoId => {
            Swal.fire({
                title: 'Yakin hapus data?',
                text: 'Data video akan dihapus permanen!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#E12425',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Hapus saja!',
                cancelButtonText: 'Batalkan'
            }).then((result) => {
         //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.call('destroy', videoId)
             // success response
                    Swal.fire({title: 'Data video berhasil dihapus!', icon: 'success'});
                } else {
                    Swal.fire({
                        title: 'Hapus data dibatalkan!',
                        icon: 'success'
                    });
                }
            });
        });
    })
</script>
@endpush