<nav class="container mx-auto">
    <ol class="rounded flex flex-wrap text-sm text-stone-600">
        @foreach ($menu as $url => $nama_kategori)
        @if ($nama_kategori != 'Home')
        <li class="text-gray-500 px-2"> > </li>
        @endif
        <li>
            <a href="{{ $url }}"
                class="text-amber-400 hover:text-orange-500 hover:underline focus:text-orange-500 focus:underline">
                {{ $nama_kategori }}
            </a>
        </li>
        @endforeach
        {{-- <li>
            <a href="#" class="hover:underline "> {{ $nama_kategori }} </a>
        </li> --}}
    </ol>
</nav>