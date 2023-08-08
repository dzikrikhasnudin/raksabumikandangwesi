<x-guest-layout>
    <x-slot name="title">Galeri - Raksabumi Kandangwesi</x-slot>
    <header class="bg-primary-700 mt-14 lg:mt-16 py-4 lg:py-6 ">
        <div class="max-w-6xl mx-auto px-6 pt-1 text-gray-50">
            <h2 class="text-xl  lg:text-3xl font-bold text-center">Galeri</h2>
        </div>
    </header>

    <div class="max-w-6xl mx-auto ">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6">
            <figure class="relative   cursor-pointer group">
                <a href="#">
                    <img class="rounded-lg transition-all duration-300 filter grayscale  hover:grayscale-0"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                        alt="image description">
                </a>
                <figcaption class=" px-4 text-lg text-white bg-gray-900 bg-opacity-30  bottom-6 group-hover:text-2xl">
                    <p class="">Dokumentasi Kegiatan Bimbingan Belajar</p>
                </figcaption>
            </figure>
        </div>
    </div>
    </div>

    @push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @endpush

    @push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    @endpush

</x-guest-layout>