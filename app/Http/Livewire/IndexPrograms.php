<?php

namespace App\Http\Livewire;

use App\Models\Program;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPrograms extends Component
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

        return view('programs.index', [
            'programs' => Program::latest()->search($this->search)->paginate($this->paginate)
        ]);
    }
}
