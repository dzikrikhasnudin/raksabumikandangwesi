<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class IndexPosts extends Component
{

    public function render()
    {
        return view('posts.index', [
            'posts' => Post::latest()->get()
        ])->layout('layouts.app');
    }
}
