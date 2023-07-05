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

        return view('pages.index', [
            'pages' => Page::latest()->search($this->search)->paginate($this->paginate)
        ]);
    }
}
