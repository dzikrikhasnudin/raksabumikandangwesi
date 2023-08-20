<x-app-layout>
    <div class="md:ml-64">
        <x-slot name="title">Semua Pesan</x-slot>
        <x-slot name="sidebar">
            @include('layouts.sidebar')
        </x-slot>

        <div class="mt-16">
            <div class="p-4 bg-white border-b sm:rounded-lg border-gray-100 mb-4">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold">Kotak Masuk</h2>
                </div>

                <hr class="my-4">

                <article
                    class="cursor-pointer mb-4 relative overflow-visible md:overflow-hidden border border-stone-200 p-2 grid grid-cols-6 items-start rounded-md gap-2 hover:shadow-md transition-all duration-300">
                    <div class="p-2 text-md col-span-5 text-stone-800">
                        <a href="#">
                            <h2 class="line-clamp-2 font-semibold">{{
                                ucwords($contact->subject) }} - <span
                                    class="text-primary-500 cursor-pointer hover:underline"><small>{{ $contact->email
                                        }}</small></span></h2>
                            <p class="text-sm text-stone-600 my-2">{{ $contact->message }}</p>
                        </a>
                        <div class="pt-2 flex gap-2 items-center flex-wrap">
                            <small class="text-stone-600 ">{{ $contact->created_at->diffForHumans() }}
                            </small>
                        </div>
                    </div>



                </article>
                <a href="{{ route('contact.index') }}"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 transition duration-300 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Kembali</a>
            </div>
        </div>
    </div>
</x-app-layout>