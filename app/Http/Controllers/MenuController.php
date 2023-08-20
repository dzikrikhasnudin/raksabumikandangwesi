<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\GalleryImage;
use App\Models\Page;
use App\Models\Post;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        $latest = Post::latest()->published()->take(3)->get();

        return view('frontpage.home', [
            'latest' => $latest
        ]);
    }

    public function dashboard()
    {

        return view('dashboard', [
            'totalProgram' => Program::count(),
            'totalPostingan' => Post::count(),
            'totalAlbum' => Album::count(),
            'totalPengguna' => User::count(),
            'latest' => Post::published()->latest()->take(4)->get()
        ]);
    }

    public function profil($slug)
    {
        $data = Page::published()->where('slug', $slug)->first();

        // dd($data);

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

        $posts = Post::published()->where('category', $path)->latest()->paginate(5);
        $latest = Post::published()->latest();

        return view('frontpage.postingan', [
            'posts' => $posts,
            'latest' => $latest->take(5)->get(),
            'title' => ucwords($path)
        ]);
    }

    public function galeri()
    {
        $images = GalleryImage::latest()->paginate(16);
        return view('frontpage.galeri', compact('images'));
    }

    public function detail($category, $slug)
    {

        if ($category == 'program') {
            $data = Program::where('slug', $slug)->firstOrFail();
            $related = Program::where('id', '!=', $data->id)->published()->inRandomOrder()->limit(4)->get();
        } else {
            $data = Post::where('category', $category)->where('slug', $slug)->firstOrFail();
            $related = Post::where('id', '!=', $data->id)->published()->inRandomOrder()->limit(4)->get();
        }

        return view('frontpage.detail', [
            'data' => $data,
            'title' => $category,
            'relatedArticles' => $related
        ]);
    }

}
