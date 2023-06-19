<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPosts extends Component
{
    use WithPagination;
    public $query = '';

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        if (request()->has('kategori')) {
            $posts = Post::where('category', '=', request('kategori'))->latest();
        } else {
            $posts = Post::latest()->search($this->query);
        }

        $title = 'Delete Posts!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('posts.index', [
            'posts' => $posts->paginate(5)
        ])->layout('layouts.app');
    }
}
