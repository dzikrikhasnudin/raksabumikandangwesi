<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="sidebar">@include('layouts.sidebar')</x-slot>

    <div class="mt-20 md:ml-64">
        <div
            class="flex justify-between items-center bg-white p-4 rounded-lg border-gray-300  h-12 mb-4 shadow-lg shadow-gray-200">
            <h2 class="text-xl font-semibold">Dashboard</h2>
            {{-- <x-button class="bg-yellow-500 hover:bg-yellow-600 text-white">Buat Postingan</x-button> --}}
        </div>

        <section class="rounded-lg mb-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
                <div class="flex flex-row items-center bg-white shadow-lg shadow-gray-200 rounded-2xl p-4 ">
                    <a href="{{ route('post.index') }}"
                        class="inline-flex flex-shrink-0 justify-center items-center w-20 h-20 text-white bg-gradient-to-br bg-red-500 hover:bg-red-700 transition duration-300 rounded-lg shadow-md shadow-gray-300">
                        <i class="fa-solid fa-file-lines text-4xl text-white my-auto"></i>
                    </a>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <p class="mb-3 text-gray-700 dark:text-gray-400 text-xl font-bold">{{ $totalPostingan }}</p>
                        <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white uppercase">Postingan</h5>
                    </div>
                </div>
                <div class="flex flex-row items-center bg-white shadow-lg shadow-gray-200 rounded-2xl p-4 ">
                    <a href="{{ route('program.index') }}"
                        class="inline-flex flex-shrink-0 justify-center items-center w-20 h-20 text-white bg-gradient-to-br bg-emerald-500 hover:bg-emerald-600 transition duration-300 rounded-lg shadow-md shadow-gray-300">
                        <i class="fa-brands fa-elementor text-4xl text-white my-auto"></i>
                    </a>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <p class="mb-3 text-gray-700 dark:text-gray-400 text-xl font-bold">{{ $totalProgram }}</p>
                        <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white uppercase">Program</h5>
                    </div>
                </div>
                <div class="flex flex-row items-center bg-white shadow-lg shadow-gray-200 rounded-2xl p-4 ">
                    <a href="{{ route('album.index') }}"
                        class="inline-flex flex-shrink-0 justify-center items-center w-20 h-20 text-white bg-gradient-to-br bg-sky-500 hover:bg-sky-700 transition duration-300 rounded-lg shadow-md shadow-gray-300">
                        <i class="fa-solid fa-images text-4xl text-white my-auto"></i>
                    </a>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <p class="mb-3 text-gray-700 dark:text-gray-400 text-xl font-bold">{{ $totalAlbum }}</p>
                        <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white uppercase">Album</h5>
                    </div>
                </div>
                <div class="flex flex-row items-center bg-white shadow-lg shadow-gray-200 rounded-2xl p-4 ">
                    <a href="{{ route('user.index') }}"
                        class="inline-flex flex-shrink-0 justify-center items-center w-20 h-20 text-white bg-gradient-to-br bg-amber-500 hover:bg-amber-600 transition duration-300 rounded-lg shadow-md shadow-gray-300">
                        <i class="fa-solid fa-users text-4xl text-white my-auto"></i>
                    </a>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <p class="mb-3 text-gray-700 dark:text-gray-400 text-xl font-bold">{{ $totalPengguna }}</p>
                        <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white uppercase">Pengguna</h5>
                    </div>
                </div>
            </div>
        </section>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-4">
            <div class="bg-white shadow-lg shadow-gray-200  rounded-lg">
                <h4 class=" text-xl font-bold p-3">Profil Yayasan</h4>
                <hr class="divider">

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Nama Yayasan :
                                </th>
                                <td class="px-4 py-3">
                                    Yayasan Raksabumi Kandangwesi
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Ketua :
                                </th>
                                <td class="px-4 py-3">
                                    Ayi Hadiyat, S.Pd.I
                                </td>
                            </tr>
                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Nomor Akta/Tanggal :
                                </th>
                                <td class="px-4 py-3">
                                    287/21 Maret 2016
                                </td>
                            </tr>
                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Bidang Kegiatan :
                                </th>
                                <td class="px-4 py-3">
                                    Sosial, Kemanusiaan, Keagamaan
                                </td>
                            </tr>
                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Tanggal Berdiri :
                                </th>
                                <td class="px-4 py-3">
                                    21 Maret 2016
                                </td>
                            </tr>
                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    NPWP :
                                </th>
                                <td class="px-4 py-3">
                                    76.534.102.9-443.000
                                </td>
                            </tr>
                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Nomor SK Kemenkumham :
                                </th>
                                <td class="px-4 py-3">
                                    AHU-0016224.AH.01.04.TAHUN 2016
                                </td>
                            </tr>

                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Alamat :
                                </th>
                                <td class="px-4 py-3">
                                    Kp. Puncak Arjani RT/RW 001/004
                                </td>
                            </tr>
                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Desa/Kelurahan :
                                </th>
                                <td class="px-4 py-3">
                                    Bungbulang
                                </td>
                            </tr>
                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Kecamatan :
                                </th>
                                <td class="px-4 py-3">
                                    Bungbulang
                                </td>
                            </tr>
                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Kabupaten :
                                </th>
                                <td class="px-4 py-3">
                                    Garut
                                </td>
                            </tr>

                            <tr class="bg-white  dark:bg-gray-800">
                                <th scope="row"
                                    class="px-4 py-3 text-right font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    Kode Pos :
                                </th>
                                <td class="px-4 py-3">
                                    44165
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="bg-white shadow-lg shadow-gray-200 rounded-lg">

                <h4 class="text-xl font-bold p-3">Postingan Terbaru</h4>
                <hr class="divider">

                @foreach ($latest as $data)
                <div class="grid grid-cols-4 gap-4 items-center p-4">
                    <figure class="rounded overflow-hidden ">
                        <a href="{{ route('detail', ['category' => $data->category, 'slug' => $data->slug]) }}"
                            class="">
                            <img src="{{ $data->thumbnail }}" alt="{{ $data->judul }}"
                                class="w-30 aspect-video object-cover hover:scale-110 transition-all duration-300 ease-in-out">
                        </a>
                    </figure>
                    <div class="col-span-3">
                        <a href="{{ route('detail', ['category' => $data->category, 'slug' => $data->slug]) }}">
                            <h4
                                class="line-clamp-2 font-medium text-gray-800 hover:text-primary-500 transition duration-300 ease-in-out">
                                {{ $data->title }}</h4>
                        </a>
                        <small class="text-gray-500 flex gap-1 items-center">
                            <svg class="h-4 w-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <circle cx="12" cy="12" r="9" />
                                <polyline points="12 7 12 12 15 15" />
                            </svg>
                            {{ $data->created_at->format('d F Y') }}
                        </small>
                    </div>
                </div>
                @endforeach

            </div>

        </div>

    </div>
</x-app-layout>