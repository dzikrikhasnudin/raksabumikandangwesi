<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Page;
use App\Models\Post;
use App\Models\Program;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('frontpage.home');
    }

    public function profil($slug)
    {
        $data = Page::published()->where('slug', $slug)->firstOrFail();

        return view('frontpage.profil', compact('data'));
    }


    public function program()
    {
        $posts = Program::published()->latest()->get();

        return view('frontpage.program', compact('posts'));
    }

    public function postingan()
    {
        $path = request()->path();

        $posts = Post::published()->where('category', $path)->latest()->get();
        $latest = Post::published()->latest();

        return view('frontpage.postingan', [
            'posts' => $posts,
            'latest' => $latest->take(5)->get(),
            'title' => ucwords($path)
        ]);
    }

    public function galeri()
    {
        $posts = Album::latest()->get();

        return view('frontpage.galeri', compact('posts'));
    }

    public function detail($category, $slug)
    {

        if ($category == 'program') {
            $data = Program::where('slug', $slug)->first();
        } else {
            $data = Post::where('slug', $slug)->first();
        }

        return view('frontpage.detail', compact('data'));
    }
}
