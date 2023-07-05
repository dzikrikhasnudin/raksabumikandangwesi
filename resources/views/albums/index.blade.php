<div class="md:ml-64">
    <x-slot name="title">Album</x-slot>
    <x-slot name="sidebar">
        @include('layouts.sidebar')
    </x-slot>

    <div class="mt-16">
        <div class="p-4 bg-white border-b sm:rounded-lg border-gray-100 mb-4">
            <div class="flex justify-between items-center ">
                <h2 class="text-xl font-semibold">Album</h2>
                <x-button data-modal-target="tambahAlbum" data-modal-toggle="tambahAlbum"
                    class="bg-primary-500 hover:bg-primary-600 active:bg-primary-900 focus:bg-primary-700 text-white">
                    <i class="fa-solid fa-plus mr-2"></i>
                    <span>Tambah</span>
                </x-button>
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
                                Tahun
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($albums as $index => $album)
                        <tr class=" bg-white border-b hover:bg-gray-50 cursor-pointer">
                            <td class="px-3 py-2 text-center" width="50">
                                {{ 1 + $index++ }}
                            </td>
                            <th scope="row" class="pl-0 pr-3 lg:px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $album->name }}
                            </th>
                            <td class="px-6 py-2">
                                {{ $album->year }}
                            </td>
                            <td class="px-6 py-2 text-right">
                                <div class="flex m-auto  text-stone-600 ">
                                    {{-- Lihat --}}
                                    <a href="{{ route('album.show', $album) }}"
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
                                    {{-- Hapus --}}
                                    <form action="{{ route('album.destroy', $album) }}" method="POST" role="alert"
                                        alert-text="Yakin Hapus Album?">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="py-2 flex hover:bg-stone-200 hover:rounded-full text-stone-600 items-center active:bg-amber-300">
                                            <span class="mx-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr class=" file:bg-white border-b ">
                            <td colspan="4" class=" px-6 py-4 text-center">
                                Belum ada postingan
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            <div class="mt-3 px-2">
                {{ $albums->links() }}
            </div>

        </div>
    </div>
</div>

@push('modals')
@include('albums.create')
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // event delete
        $("form[role='alert']").submit(function(event) {
            event.preventDefault();
            Swal.fire({
                title: "Hapus Album",
                text: $(this).attr('alert-text'),
                icon: 'warning',
                allowOutsideClick: false,
                showCancelButton: true,
                cancelButtonText: "Batal",
                reverseButtons: true,
                confirmButtonText: "Hapus",
                confirmButtonColor: '#C27803',
                }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit();
                }
            });
        })
    })
</script>
@endpush