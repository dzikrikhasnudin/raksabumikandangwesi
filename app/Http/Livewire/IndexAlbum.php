<?php

namespace App\Http\Livewire;

use App\Models\Album;
use Livewire\Component;
use Livewire\WithPagination;

class IndexAlbum extends Component
{
    use WithPagination;

    public function render()
    {
        $albums = Album::latest()->paginate(7);

        return view('albums.index', compact('albums'));
    }
}
