<x-app-layout>
    <div class="md:ml-64">
        <x-slot name="title">{{ $album->name }}</x-slot>
        <x-slot name="sidebar">
            @include('layouts.sidebar')
        </x-slot>

        <div class="mt-16">
            <div class="p-4 bg-white border-b sm:rounded-lg border-gray-100">
                <div class="flex justify-between mb-4 items-center">
                    <h2 class="text-xl font-semibold">{{ $album->name }}</h2>
                    <div class="flex gap-2">
                        <button data-modal-target="editAlbum" data-modal-toggle="editAlbum"
                            class="bg-primary-500 hover:bg-primary-600 active:bg-primary-900 focus:bg-primary-700 text-white h-8 w-8 text-center rounded">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button data-modal-target="tambahGambar" data-modal-toggle="tambahGambar"
                            class="bg-green-500 hover:bg-green-600 active:bg-green-900 focus:bg-green-700 text-white h-8 w-8 text-center rounded">
                            <i class="fa-solid fa-image"></i>
                        </button>
                    </div>
                </div>
                <hr class="divide-x-2 my-4">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    @foreach ($album->images as $data)
                    <div class="hover:relative group transition-all duration-300 ease-in">
                        <a href="{{ $data->image }}" data-lightbox="{{ $album->slug }}" data-title="{{ $album->name }}"
                            class="">
                            <img class="aspect-square w-full object-cover rounded-lg" src="{{ $data->image }}" alt="">
                        </a>
                        <form action="{{ route('album.destroy-image', $data->id) }}" method="POST" role="alert"
                            alert-text="Yakin Hapus Gambar?">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-600 hover:bg-red-800 p-1 text-white absolute hidden group-hover:block h-8 w-8 text-center rounded top-2 right-2 z-50">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    @push('modals')
    @include('albums.add-images')

    @include('albums.edit')
    @endpush

    @push('style')
    <link rel="stylesheet" href="{{ asset('vendor/lightbox2/dist/css/lightbox.min.css') }}">
    @endpush

    @push('script')
    <script src="{{ asset('vendor/lightbox2/dist/js/lightbox-plus-jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/lightbox2/dist/js/lightbox.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>

    <script>
        const image = document.getElementById('image');
        const imgPreview = document.getElementById('preview');
        const lfm = document.getElementById('lfm');
        const container = document.getElementById('container');

        image.onchange = function() {
            container.style.maxHeight = '500px';
            imgPreview.setAttribute("src", image.value);
        }

        $('#lfm').filemanager('image');
    </script>

    <script>
        $(document).ready(function() {
        // event delete
        $("form[role='alert']").submit(function(event) {
            event.preventDefault();
            Swal.fire({
                title: "Hapus Gambar",
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
</x-app-layout>