<x-app-layout>
    <x-slot name="title">Tambah Postingan</x-slot>
    {{-- <x-slot name="sidebar">@include('layouts.sidebar')</x-slot> --}}

    <div class="mt-16 max-w-7xl mx-auto ">
        <div class="flex justify-between items-center bg-white px-4 py-6 rounded-lg border border-gray-100  h-12 mb-4">
            <h2 class="text-xl font-semibold">Tambah Postingan</h2>
        </div>

        <div class="p-4 bg-white border-b sm:rounded-lg border-gray-100 h-screen mb-4">
            <div class="p-6 bg-white border-b border-gray-200">

                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data"
                    class="grid grid-flow-row-dense lg:grid-cols-3 grid-cols-1">
                    @csrf
                    <div class="col-span-2">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="title"
                                class="block py-2.5 px-0 w-full text-sm text-stone-800 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-amber-400 peer {{ $errors->has('title') ? 'border-red-600' : 'border-gray-300' }}"
                                value="{{ old('title') }}" placeholder=" " />

                            <label for="title"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-amber-400 peer-focus:dark:text-amber-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul
                                Postingan</label>

                            @error('title')
                            <small class="text-red-600 my-2 text-xs">{{ $message }}</small>
                            @enderror

                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="description"
                                class="block py-2.5 px-0 w-full text-sm text-stone-800 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-amber-400 peer {{ $errors->has('description') ? 'border-red-600' : 'border-gray-300' }}"
                                placeholder=" " value="{{ old('description') }}" />

                            <label for="description"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-amber-400 peer-focus:dark:text-amber-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deskripsi
                                Postingan</label>

                            @error('description')
                            <small class="text-red-600 my-2 text-xs">{{ $message }}</small>
                            @enderror
                        </div>

                        <textarea name="content" id="content" rows="20" cols="80">{{ old('content') }}</textarea>
                        @error('content')
                        <small class="text-red-600 my-2 text-xs block">{{ $message }}</small>
                        @enderror
                    </div>

                    <aside class="py-4 lg:p-4">
                        <div class=" max-w-xl mx-auto border border-gray-200 rounded mb-4" x-data="{ selected: 0 }">
                            <ul class="shadow-box">
                                <li class="relative border-b border-gray-200">
                                    <button type="button" class="w-full px-6 py-4 text-left"
                                        @click="selected !== 1 ? selected = 1 : selected = null">
                                        <div class="flex items-center justify-between text-stone-700 text-sm">
                                            <span>Thumbnail
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path x-bind:class="selected == 1 ? 'hidden' : 'inline-flex'" class=""
                                                    stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                <path x-bind:class="selected == 1 ? 'inline-flex' : 'hidden'" class=""
                                                    stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                    </button>
                                    <div id="container"
                                        class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                        x-ref="container1"
                                        x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                        <div class="py-3">
                                            <a id="lfm" data-input="thumbnail" data-preview="preview" class="py-10">
                                                <label for="thumbnail"
                                                    class="flex flex-col items-center mx-10 px-4 py-3 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-amber-400 hover:text-white transition duration-300 ease-in-out">
                                                    <svg class="w-8 h-8" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path
                                                            d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                    </svg>
                                                    <span class="mt-2 text-base leading-normal">Pilih Gambar</span>
                                                </label>
                                            </a>
                                            <input id="thumbnail" class="form-control" type="hidden" name="thumbnail"
                                                value="{{ old('thumbnail') }}">
                                            <img id="preview"
                                                src="{{ asset('storage/photos/upload/no-image.png') ?? old('thumbnail') }}"
                                                class="object-cover mx-auto px-10 rounded-lg py-3 aspect-video transition duration-300 ease-in-out">
                                        </div>
                                    </div>
                                </li>

                                <li class="relative border-b border-gray-200">
                                    <button type="button" class="w-full px-6 py-4 text-left"
                                        @click="selected !== 2 ? selected = 2 : selected = null">
                                        <div class="flex items-center justify-between text-stone-700 text-sm">
                                            <span>Kategori @error('category')
                                                <small class="text-red-600 my-2 text-xs">({{ $message }})</small>
                                                @enderror
                                            </span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path x-bind:class="selected == 2 ? 'hidden' : 'inline-flex'" class=""
                                                    stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                <path x-bind:class="selected == 2 ? 'inline-flex' : 'hidden'" class=""
                                                    stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                    </button>

                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                        x-ref="container2"
                                        x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                        <div class="py-3 px-6">
                                            <div class="w-full">
                                                <div class="flex items-center mb-2">
                                                    <input id="category-1" type="radio" value="artikel" name="category"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                    <label for="category-1"
                                                        class="ml-2 text-sm font-medium text-gray-900 ">Artikel</label>
                                                </div>
                                                <div class="flex items-center mb-2">
                                                    <input id="category-2" type="radio" value="berita" name="category"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:ring-offset-gray-800 focus:ring-2 ">
                                                    <label for="category-2"
                                                        class="ml-2 text-sm font-medium text-gray-900 ">Berita</label>
                                                </div>
                                                <div class="flex items-center mb-2">
                                                    <input id="category-3" type="radio" value="ceramah" name="category"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                    <label for="category-3"
                                                        class="ml-2 text-sm font-medium text-gray-900 ">Ceramah</label>
                                                </div>
                                                <div class="flex items-center mb-2">
                                                    <input id="category-4" type="radio" value="tokoh" name="category"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                    <label for="category-4"
                                                        class="ml-2 text-sm font-medium text-gray-900 ">Tokoh</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="relative border-b border-gray-200">
                                    <button type="button" class="w-full px-6 py-4 text-left"
                                        @click="selected !== 3 ? selected = 3 : selected = null">
                                        <div class="flex items-center justify-between text-stone-700 text-sm">
                                            <span>Status</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path x-bind:class="selected == 3 ? 'hidden' : 'inline-flex'" class=""
                                                    stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                <path x-bind:class="selected == 3 ? 'inline-flex' : 'hidden'" class=""
                                                    stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                    </button>

                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                        x-ref="container3"
                                        x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                        <div class="py-3 px-6">
                                            <div class="w-full">
                                                <label for="countries"
                                                    class="block mb-2 sr-only text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                <select id="countries" name="status"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                                    <option value="draft" selected>Draft</option>
                                                    <option value="published">Publikasikan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        </div>

                        <div class="grid grid-cols-2 gap-2 items-center">
                            <a href="{{ route('post.index') }}"
                                class=" text-stone-800 bg-stone-200 hover:bg-stone-300 focus:ring-4 focus:outline-none focus:ring-stone-200 rounded-lg px-4 py-2 text-center md:mr-0  transition-all duration-300">
                                Batal
                            </a>
                            <button type="submit"
                                class=" text-white bg-amber-400 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 rounded-lg px-4 py-2 text-center md:mr-0 transition-all duration-300">
                                Submit
                            </button>
                        </div>
                    </aside>

                </form>
            </div>
        </div>

    </div>

    @push('script')
    @include('partials.ckeditor')
    @endpush


</x-app-layout>