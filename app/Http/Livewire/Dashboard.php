<?php

namespace App\Http\Livewire;

use App\Models\Podcast;
use App\Models\Scholarship;
use App\Models\Vacancy;
use Livewire\Component;

class Dashboard extends Component
{
    public $podcastCount;
    public $vacanyCount;
    public $scholarship;

    public function render()
    {
        $this->podcastCount = Podcast::count();
        $this->vacanyCount = Vacancy::count();
        $this->scholarship = Scholarship::count();

        return view('livewire.dashboard');
    }
}
