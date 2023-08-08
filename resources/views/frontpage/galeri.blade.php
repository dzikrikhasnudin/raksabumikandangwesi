<x-guest-layout>
    <x-slot name="title">Galeri - Raksabumi Kandangwesi</x-slot>
    <header class="bg-primary-700 mt-14 lg:mt-16 py-4 lg:py-6 ">
        <div class="max-w-6xl mx-auto px-6 pt-1 text-gray-50">
            <h2 class="text-xl  lg:text-3xl font-bold text-center">Galeri</h2>
        </div>
    </header>
    <div class="max-w-6xl mx-auto ">

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-6">
            @foreach ($images as $data)
            <a href="{{ $data->image }}" data-lightbox="galeri" data-title="{{ $data->album->name }}">
                <img class="aspect-square w-full object-cover rounded-lg" src="{{ $data->image }}" alt="">
            </a>
            @endforeach
        </div>

        <div class="pagination mt-4">
            {{ $images->links() }}
        </div>
    </div>
    </div>

    @push('style')
    <link rel="stylesheet" href="{{ asset('vendor/lightbox2/dist/css/lightbox.min.css') }}">
    @endpush

    @push('script')
    <script src="{{ asset('vendor/lightbox2/dist/js/lightbox-plus-jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/lightbox2/dist/js/lightbox.min.js') }}"></script>
    @endpush
</x-guest-layout>