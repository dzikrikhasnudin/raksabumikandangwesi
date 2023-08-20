<x-guest-layout>
    <x-slot name="title">Kontak</x-slot>

    <div class="max-w-6xl mx-auto mt-14 lg:mt-16 ">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                    Kontak Kami
                </h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
                    Hubungi kami apabila ada kritik, saran, maupun permohonan kerjasama
                </p>
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-8">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
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
</x-guest-layout>