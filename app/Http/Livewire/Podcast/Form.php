<?php

namespace App\Http\Livewire\Podcast;

use App\Models\Podcast;
use Livewire\Component;

class Form extends Component
{
    public $title;
    public $description;
    public $episode;
    public $video_id;
    public $is_edit = false;
    public $id = null;
    
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'episode' => 'required|integer|min:1',
        'video_id' => 'nullable|string|max:255',
    ];

     
    public function save()
    {
        $this->validate();
        $podcast = '';
        if ($this->is_edit) {
            $podcast = Podcast::find($this->id);
        } else {
            $podcast  = new Podcast();
        }
        $podcast->title = $this->title;
        $podcast->description = $this->description;
        $podcast->video_id = $this->video_id;
        $podcast->episode = $this->episode;
        $podcast->save();
        $this->reset();
        toastr()->success('Created Successfully');
        return redirect()->route('podcast');
    }
    public function render()
    {
        return view('livewire.podcast.form');
    }
}
