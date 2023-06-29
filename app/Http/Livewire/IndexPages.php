<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPages extends Component
{
    use WithPagination;
    public $query = '';

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {

        return view('pages.index', [
            'pages' => Page::latest()->search($this->query)->paginate(5)
        ]);
    }
}
