<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;

class IndexContacts extends Component
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

        return view('contacts.index', [
            'contacts' => Contact::latest()->paginate(5)
        ]);
    }
}
