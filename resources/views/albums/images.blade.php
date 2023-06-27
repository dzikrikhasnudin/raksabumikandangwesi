<x-app-layout>
    <div class="md:ml-64">
        <x-slot name="title">{{ $album->name }}</x-slot>
        <x-slot name="sidebar">
            @include('layouts.sidebar')
        </x-slot>

        <div class="mt-16">
            {{-- <div
                class="flex justify-between items-center bg-white px-4 py-6 rounded-lg border border-gray-100  h-12 mb-4">
                <h2 class="text-xl font-semibold">{{ $album->name }}</h2>
                <x-button data-modal-target="tambahGambar" data-modal-toggle="tambahGambar"
                    class="bg-primary-500 hover:bg-primary-600 active:bg-primary-900 focus:bg-primary-700 text-white">
                    Tambah
                    Album</x-button>
            </div> --}}
            <div class="p-4 bg-white border-b sm:rounded-lg border-gray-100 mb-4">
                <h2 class="text-xl font-semibold">{{ $album->name }}</h2>

            </div>
        </div>
    </div>
</x-app-layout>