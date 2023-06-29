<?php

namespace App\Http\Livewire;

use App\Models\GalleryVideo;
use Livewire\Component;
use Livewire\WithPagination;

class IndexVideos extends Component
{

    use WithPagination;

    public $statusUpdate = false;
    public $paginate = 5;
    public $search;

    protected $queryString = ['search'];

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
        $videos = GalleryVideo::latest()->get();

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
