<?php

namespace App\Http\Livewire;

use App\Models\Program;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;

class IndexPrograms extends Component
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
        if (!Gate::allows('program_show')) {
            abort(404);
        }

        switch ($this->status) {
            case 'draft':
                $programs = Program::draft()->latest()->search($this->search)->paginate($this->paginate);
                break;
            case 'published':
                $programs = Program::published()->latest()->search($this->search)->paginate($this->paginate);
                break;
            case 'all':
                $programs = Program::latest()->search($this->search)->paginate($this->paginate);
                break;
        }

        return view('programs.index', [
            'programs' => $programs
        ]);
    }
}
