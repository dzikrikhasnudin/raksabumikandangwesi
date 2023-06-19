<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:posts,title',
            'description' => 'required|string',
            'category' => 'required',
            'content' => 'required',
        ]);

        $data['slug'] = Str::slug($request->title);
        $data['thumbnail'] = parse_url($request->thumbnail)['path'];
        $data['status'] = $request->status;

        Post::create($data);
        Alert::toast('Postingan baru berhasil ditambahkan', 'success');

        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:posts,title,' . $post->id,
            'description' => 'required|string',
            'category' => 'required',
            'content' => 'required',
        ]);

        $data['slug'] = Str::slug($request->title);
        $data['thumbnail'] = parse_url($request->thumbnail)['path'];
        $data['status'] = $request->status;

        $post->update($data);
        Alert::toast('Data postingan berhasil diubah', 'success');

        return redirect()->route('post.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        Alert::toast('Postingan berhasil dihapus', 'success');

        return back();
    }

    public function show($category, $slug)
    {
        $post = Post::where('slug', '=', $slug)->get();
        dd($post);
    }
}
