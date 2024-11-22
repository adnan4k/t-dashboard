<?php

namespace App\Http\Livewire\Podcast;

use Livewire\Component;

class PocastComponent extends Component
{
    public $title;
    public $description;
    public $episode;
    public $video_id; 
    public $is_edit = false;
    protected $rules = [
        'title' => 'required|string|max:255',     
        'description' => 'required|string',       
        'episode' => 'required|integer|min:1',    
        'video_id' => 'nullable|string|max:255',  
    ];
    
    

    public function render()
    {
        return view('livewire.podcast.pocast-component');
    }
}
