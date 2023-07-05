<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\GalleryVideo;
use Illuminate\Support\Facades\Gate;

class UpdateVideo extends Component
{
    public $title;
    public $video;
    public $videoId;
    public $statusUpdate = false;
    public $search;

    protected $listeners = [
        'getVideo' => 'showVideo'
    ];

    public function render()
    {
        return view('videos.update');
    }

    public function showVideo($video)
    {
        $this->title = $video['title'];
        $this->video = $video['video'];
        $this->videoId = $video['id'];
    }

    public function update()
    {
        if (!Gate::allows('gallery_update')) {
            abort(404);
        }

        if ($this->videoId) {
            $video = GalleryVideo::find($this->videoId);
            $video->update([
                'title' => $this->title,
                'slug' => Str::slug($this->title),
                'video' => $this->video
            ]);


            $this->resetInput();

            $this->emit('videoUpdated', $video);
        }
    }

    private function resetInput()
    {
        $this->title = null;
        $this->video = null;
    }
}
