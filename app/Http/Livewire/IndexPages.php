<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;

class IndexPages extends Component
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
        if (!Gate::allows('page_show')) {
            abort(404);
        }

        switch ($this->status) {
            case 'draft':
                $pages = Page::draft()->latest()->search($this->search)->paginate($this->paginate);
                break;
            case 'published':
                $pages = Page::published()->latest()->search($this->search)->paginate($this->paginate);
                break;
            case 'all':
                $pages = Page::latest()->search($this->search)->paginate($this->paginate);
                break;
        }

        return view('pages.index', [
            'pages' => $pages
        ]);
    }
}
