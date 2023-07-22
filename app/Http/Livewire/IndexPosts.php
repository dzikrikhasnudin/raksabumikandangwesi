<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;

class IndexPosts extends Component
{
    use WithPagination;
    public $search;
    public $paginate = 5;
    public $status = 'all';

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
        if (!Gate::allows('post_show')) {
            abort(404);
        }

        if (request()->has('kategori')) {
            $posts = Post::where('category', '=', request('kategori'))->latest();
        } else {
            $posts = Post::latest()->search($this->search);
        }

        switch ($this->status) {
            case 'draft':
                $posts = $posts->draft()->paginate($this->paginate);
                break;
            case 'published':
                $posts = $posts->published()->paginate($this->paginate);
                break;
            case 'all':
                $posts = $posts->paginate($this->paginate);
                break;
        }


        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
