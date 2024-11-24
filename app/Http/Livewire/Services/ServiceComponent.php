<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceComponent extends Component
{
   public $services; 
    public function mount(){
           $this->services = Service::get();
    }
    public function render()
    {
        return view('livewire.services.service-component');
    }
}
