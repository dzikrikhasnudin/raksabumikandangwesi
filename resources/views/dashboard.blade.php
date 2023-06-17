<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="sidebar">@include('layouts.sidebar')</x-slot>

    <div class="mt-20 md:ml-64">
        <div class="flex justify-between items-center bg-white p-4 rounded-lg border-gray-300  h-12 mb-4">
            <h2 class="text-xl font-semibold">Dashboard</h2>
            {{-- <x-button class="bg-yellow-500 hover:bg-yellow-600 text-white">Buat Postingan</x-button> --}}
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300  h-96 mb-4"></div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div class="border-2 border-dashed border-gray-300 rounded-lg  h-32 md:h-64"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300  h-32 md:h-64"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300  h-32 md:h-64"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300  h-32 md:h-64"></div>
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 h-96 mb-4"></div>
        <div class="grid grid-cols-3 gap-4">
            <div class="border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72"></div>

        </div>
    </div>
</x-app-layout>