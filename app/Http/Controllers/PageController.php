<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();
        Alert::toast('Halaman berhasil dihapus', 'success');

        return back();
    }
}
