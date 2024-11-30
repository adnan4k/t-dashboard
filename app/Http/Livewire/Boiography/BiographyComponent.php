<?php

namespace App\Http\Livewire\Boiography;

use App\Models\Biography;
use Livewire\Attributes\On;
use Livewire\Component;

class BiographyComponent extends Component
{
    public $biographies;
    #[On('refreshTable')]
    public function mount(){
        $this->biographies =  Biography::latest()->get();
    }
    public function render()
    {
        return view('livewire.boiography.biography-component');
    }
}
