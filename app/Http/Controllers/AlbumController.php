<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AlbumController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:albums,name',
            'year' => 'required',
        ]);

        $data['slug'] = Str::slug($request->name);

        Album::create($data);
        Alert::toast('Album berhasil ditambahkan', 'success');

        return redirect()->route('album.index');
    }

    public function show(Album $album)
    {
        return view('albums.images', compact('album'));
    }
}
