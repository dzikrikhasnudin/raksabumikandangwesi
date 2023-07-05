<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GalleryVideo;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Builder;

class IndexVideos extends Component
{

    use WithPagination;

    public $statusUpdate = false;
    public $paginate = 5;
    public $search;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    protected $listeners = [
        'videoStored' => 'handleStored',
        'videoUpdated' => 'handleUpdated'
    ];


    public function render()
    {
        if (!Gate::allows('gallery_show')) {
            abort(404);
        }

        if ($this->search === null) {
            $videos = GalleryVideo::latest()->paginate($this->paginate);
        } else {
            $videos = GalleryVideo::search($this->search)->latest()
                ->paginate($this->paginate);
        }

        return view('videos.index', compact('videos'));
    }

    public function getVideo($id)
    {
        $this->statusUpdate = true;
        $video = GalleryVideo::find($id);
        $this->emit('getVideo', $video);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = GalleryVideo::find($id);
            $data->delete();
            $this->statusUpdate = false;
        }
    }

    public function handleStored($video)
    {
        session()->flash('message', 'Video baru telah ditambahkan.');
    }

    public function handleUpdated($video)
    {

        $this->statusUpdate = false;
        session()->flash('message', 'Data video telah diperbarui.');
    }
}
