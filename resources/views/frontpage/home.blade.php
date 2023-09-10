<x-guest-layout>
    <x-slot name="title">Home - Raksabumi Kandangwesi</x-slot>
    <div class="bg-gradient-to-b from-primary-50  to-transparent ">
        <div class="max-w-6xl mx-auto py-12">
            <section class=" dark:bg-gray-900">
                <div class="grid px-6 py-8 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1
                            class="max-w-2xl mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-4xl xl:text-5xl dark:text-white">
                            Yayasan Raksabumi Kandangwesi</h1>
                        <p
                            class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                            Mengelola potensi yang terkandung di wilayah Kandangwesi guna kemajuan masyarakatnya. </p>
                        <a href="{{ route('profil', 'sejarah-berdiri') }}"
                            class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Selengkapnya
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 p-6 lg:flex">
                        <img src="{{ asset('assets/img/empowering_1.png') }}" alt="mockup">
                    </div>
                </div>
            </section>

            <section class="bg-white dark:bg-gray-900 rounded-2xl">
                <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                    <div class="max-w-screen-md mb-8 lg:mb-16">
                        <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                            Nilai-nilai Kelembagaan</h2>
                        <p class="text-gray-500 sm:text-xl dark:text-gray-400">Rabuka berupaya menghadirkan beragam
                            program yang
                            bermuara pada peningkatan Indeks
                            Pembangunan Manusia (IPM).
                        </p>
                    </div>
                    <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                        <div>
                            <div
                                class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                <i class="fa-solid fa-hand-holding-heart lg:text-xl text-primary-600"></i>
                            </div>
                            <h3 class="mb-2 text-xl font-bold dark:text-white">Filantropisme</h3>
                            <p class="text-gray-500 dark:text-gray-400">Berlandaskan pada semangat memberi, membantu,
                                dan
                                berkontribusi secara sukarela untuk kepentingan kemanusiaan.
                            </p>
                        </div>
                        <div>
                            <div
                                class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                <i class="fa-solid fa-user-shield lg:text-xl text-primary-600"></i>

                            </div>
                            <h3 class="mb-2 text-xl font-bold dark:text-white">Integritas</h3>
                            <p class="text-gray-500 dark:text-gray-400">Mengutamakan integritas dengan menjunjung
                                logika, etika, dan estetika dalam semua tindakan dan keputusan, sehingga menjadi teladan
                                bagi masyarakat</p>
                        </div>
                        <div>
                            <div
                                class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                <i class="fa-solid fa-lightbulb lg:text-xl text-primary-600"></i>
                            </div>
                            <h3 class="mb-2 text-xl font-bold dark:text-white">Inovasi</h3>
                            <p class="text-gray-500 dark:text-gray-400">Mendukung dan mendorong penerapan inovasi tepat
                                guna yang berdampak positif terhadap pembangunan berkelanjutan</p>
                        </div>
                        <div>
                            <div
                                class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                <i class="fa-solid fa-handshake-angle lg:text-xl text-primary-600"></i>
                            </div>
                            <h3 class="mb-2 text-xl font-bold dark:text-white">Kolaborasi</h3>
                            <p class="text-gray-500 dark:text-gray-400">Menjalin kolaborasi lintas sektor, baik dengan
                                pemerintah, swasta, komunitas maupun lembaga sejenis, yang memiliki tujuan yang sama</p>
                        </div>
                        <div>
                            <div
                                class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                <i class="fa-solid fa-arrow-up-right-dots lg:text-xl text-primary-600"></i>
                            </div>
                            <h3 class="mb-2 text-xl font-bold dark:text-white ">Adaptasi</h3>
                            <p class="text-gray-500 dark:text-gray-400 ">Memiliki kemampuan untuk beradaptasi dengan
                                perubahan guna menjaga relevansi dan efektivitas dalam mencapai tujuan.</p>
                        </div>
                        <div>
                            <div
                                class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                                <i class="fa-solid fa-shield-halved lg:text-xl text-primary-600"></i>
                            </div>
                            <h3 class="mb-2 text-xl font-bold dark:text-white">Transparansi</h3>
                            <p class="text-gray-500 dark:text-gray-400">Menjalankan praktik-praktik yang terbuka, jujur,
                                dan terpercaya dalam seluruh aspek pengelolaan Yayasan guna membangun kepercayaan dari
                                semua mitra yang terlibat.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                        <h2
                            class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                            Blog</h2>
                        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Baca tulisan-tulisan menarik
                            di bawah ini.</p>
                    </div>
                    <div class="grid gap-8 md:grid-cols-3 justify-center">
                        @foreach ($latest as $data)
                        <article
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="{{ route('detail', ['category' => $data->category, 'slug' => $data->slug]) }}">
                                <img class="rounded-t-lg aspect-video object-cover w-full" src="{{ $data->thumbnail }}"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="{{ route('detail', ['category' => $data->category, 'slug' => $data->slug]) }}">
                                    <h5
                                        class="mb-2 line-clamp-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{
                                        $data->title }}</h5>
                                </a>
                                <p class="line-clamp-3 mb-3 font-normal text-gray-700 dark:text-gray-400">{{
                                    $data->description }}
                                </p>
                                <a href="{{ route('detail', ['category' => $data->category, 'slug' => $data->slug]) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Baca Selengkapnya
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </article>
                        @endforeach

                    </div>
                </div>
            </section>

            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-md">
                    <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                        Kontak Kami
                    </h2>
                    <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
                        Hubungi kami apabila ada kritik, saran, maupun permohonan kerjasama
                    </p>
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-8">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                            </label>
                            <input type="email" id="email" name="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 {{ $errors->has('email') ? 'border-red-600' : 'border-gray-300' }}"
                                value="{{ old('email') }}" placeholder="nama@gmail.com" required>
                            @error('email')
                            <small class="text-red-600 my-2 text-xs">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="subject"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subjek</label>
                            <input type="text" id="subject" name="subject"
                                class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border shadow-sm focus:ring-primary-500 focus:border-primary-500 {{ $errors->has('subject') ? 'border-red-600' : 'border-gray-300' }}"
                                value="{{ old('subject') }}" placeholder="Masukkan subjek pesan" required>

                            @error('subject')
                            <small class="text-red-600 my-2 text-xs">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                            <textarea id="message" rows="6" name="message"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border  focus:ring-primary-500 focus:border-primary-500  {{ $errors->has('message') ? 'border-red-600' : 'border-gray-300' }}"
                                value="{{ old('message') }}" placeholder="Tulis pesan disini..."></textarea>
                            @error('message')
                            <small class="text-red-600 my-2 text-xs">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit"
                            class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Submit</button>
                    </form>
                </div>
            </section>

        </div>

    </div>



</x-guest-layout>