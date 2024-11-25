<?php

namespace App\Http\Livewire\Podcast;

use App\Models\Podcast;
use Livewire\Component;

class PodcastComponent extends Component
{
   
   
    public $podcasts;
     

    public function mount(){
        $this->podcasts = Podcast::get();
    }

    public function render()
    {
        return view('livewire.podcast.podcast-component');
    }
}
