<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:page_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:page_update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:page_delete', ['only' => 'destroy']);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:pages,title',
            'description' => 'required|string',
            'content' => 'required',
        ]);

        $data['slug'] = Str::slug($request->title);
        $data['status'] = $request->status;

        Page::create($data);
        Alert::toast('Halaman berhasil ditambahkan', 'success');

        return redirect()->route('page.index');
    }

    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:pages,title,' . $page->id,
            'description' => 'required|string',
            'content' => 'required',
        ]);

        $data['slug'] = Str::slug($request->title);
        $data['status'] = $request->status;

        $page->update($data);
        Alert::toast('Halaman berhasil diubah', 'success');

        return redirect()->route('page.index');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        Alert::toast('Halaman berhasil dihapus', 'success');

        return back();
    }
}
