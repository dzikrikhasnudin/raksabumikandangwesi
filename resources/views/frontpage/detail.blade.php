<x-guest-layout>
    <x-slot name="title">{{ $data->title }}</x-slot>
    <div class="max-w-6xl mx-auto mt-14 lg:mt-16">
        <div class="grid p-6 ">
            <h1 class="text-2xl">{{ $data->title }}</h1>
        </div>
    </div>
</x-guest-layout>