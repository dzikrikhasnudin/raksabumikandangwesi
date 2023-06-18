<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class IndexPosts extends Component
{

    public function render()
    {
        $posts = Post::latest()->get();

        $title = 'Delete Posts!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('posts.index', compact('posts'))->layout('layouts.app');
    }
}
