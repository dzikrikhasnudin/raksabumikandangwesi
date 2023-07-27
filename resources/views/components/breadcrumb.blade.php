<nav class="container mx-auto">
    <ol class="rounded flex flex-wrap text-sm text-stone-600">
        @foreach ($menu as $url => $nama_kategori)
        @if ($nama_kategori != 'Home')
        <li class="text-gray-500 px-2"> > </li>
        @endif
        <li>
            <a href="{{ $url }}"
                class="text-primary-500 hover:text-primary-700 hover:underline focus:text-primary-700 focus:underline">
                {{ $nama_kategori }}
            </a>
        </li>
        @endforeach

    </ol>
</nav>