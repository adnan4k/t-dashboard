<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $image;
    public $is_edit;
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|mimes:png,jpeg,jpg,gif,webp|max:2048',
    ];
    public function save()
    {
        // dd($this->title,$this->description,$this->image);

       $validated =  $this->validate();
        $services = $this->is_edit ? Service::find($this->id) : new Service();

        $services->title = $this->title;
        $services->description = $this->description;
      
        if ($this->image) {
            if ($this->is_edit && $services->image) {
                Storage::delete($services->image);
            }

            $path = $this->image->store('services', 'public'); // Save in the 'storage/app/public/services' directory
            $services->image = $path;
        }

        $services->save();
        $this->reset();
        // toastr()->success('Created Successfully');
        return redirect()->route('services');
    }

    public function render()
    {
        return view('livewire.services.form');
    }
}
