<hr>

<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl text-center">
        <a href="{{ route('home') }}"
            class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <x-application-logo></x-application-logo>
            Raksabumi
        </a>
        <p class="my-6 text-gray-500 dark:text-gray-400">Open-source library of over 400+ web components and interactive
            elements built for better web.</p>
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">
            <li>
                <a href="/profil/sejarah-berdiri" class="mr-4 hover:underline md:mr-6 ">Tentang Kami</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Kebijakan dan Privasi</a>
            </li>
            <li>
                <a href="{{ route('contact.create') }}" class="mr-4 hover:underline md:mr-6 ">Kontak</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Sitemap</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Disclaimer</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">FAQs</a>
            </li>
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">{{ now()->year }} <a
                href="{{ route('home') }}" class="hover:underline">Raksabumi™</a>. All Rights Reserved.</span>
    </div>
</footer>