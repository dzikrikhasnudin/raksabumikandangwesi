<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPosts extends Component
{
    use WithPagination;
    public $search;
    public $paginate = 5;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        if (request()->has('kategori')) {
            $posts = Post::where('category', '=', request('kategori'))->latest();
        } else {
            $posts = Post::latest()->search($this->search);
        }

        return view('posts.index', [
            'posts' => $posts->paginate($this->paginate)
        ]);
    }
}
