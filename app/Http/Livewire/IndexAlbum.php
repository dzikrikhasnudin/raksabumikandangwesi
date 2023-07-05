<?php

namespace App\Http\Livewire;

use App\Models\Album;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;

class IndexAlbum extends Component
{
    use WithPagination;

    public function render()
    {
        if (!Gate::allows('gallery_show')) {
            abort(404);
        }

        $albums = Album::latest()->paginate(7);

        return view('albums.index', compact('albums'));
    }
}
