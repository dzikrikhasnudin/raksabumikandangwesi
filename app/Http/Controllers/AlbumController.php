<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\GalleryImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:gallery_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:gallery_update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:gallery_detail', ['only' => ['show', 'addImage', 'destroyImage']]);
        $this->middleware('permission:gallery_delete', ['only' => 'destroy']);
    }

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

    public function update(Album $album, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:albums,name,' . $album->id,
            'year' => 'required',
        ]);

        $data['slug'] = Str::slug($request->name);

        $album->update($data);
        Alert::toast('Data album berhasil diperbarui', 'success');

        return redirect()->route('album.show', $album);
    }

    public function show(Album $album)
    {
        return view('albums.images', compact('album'));
    }

    public function destroy(Album $album)
    {
        $album->delete();
        Alert::toast('Album berhasil dihapus', 'success');

        return back();
    }

    public function addImage(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|string',
            'album_id' => 'required'
        ]);

        $data['image'] = parse_url($request->image)['path'];

        GalleryImage::create($data);
        Alert::toast('Gambar berhasil ditambahkan', 'success');

        return back();
    }

    public function destroyImage($id)
    {
        $image = GalleryImage::findOrFail($id);

        $image->delete();
        Alert::toast('Gambar berhasil dihapus', 'success');

        return back();
    }
}
