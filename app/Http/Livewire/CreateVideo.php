<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\GalleryVideo;

class CreateVideo extends Component
{
    public $title;
    public $video;

    public function render()
    {
        return view('videos.create');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|min:5|unique:gallery_videos,title',
            'video' => 'required|min:11'
        ]);

        $video = GalleryVideo::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'video' => $this->video
        ]);

        $this->resetInput();

        $this->emit('videoStored', $video);
    }

    private function resetInput()
    {
        $this->title = null;
        $this->video = null;
    }
}
