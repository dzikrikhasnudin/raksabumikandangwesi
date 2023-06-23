<?php

namespace App\Http\Livewire;

use App\Models\Program;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPrograms extends Component
{
    use WithPagination;
    public $query = '';

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {

        return view('programs.index', [
            'programs' => Program::latest()->search($this->query)->paginate(5)
        ])->layout('layouts.app');
    }
}
