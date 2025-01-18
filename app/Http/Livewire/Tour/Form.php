<?php

namespace App\Http\Livewire\Tour;

use App\Models\Tour;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;

class Form extends Component
{
 use WithFileUploads;
    public $name;
    public $duration;
    public $tour_code;
    public $inclusions;
    public $exclusions;
    public $image;
    protected $listeners = ['tourModal' => 'tourModal'];
    public $openModal = false;
    public $is_edit = false;
    public $id;

    public function tourModal()
    {
        $this->openModal = true;
    }

    protected $rules = [
        'name' => 'required',
        'image' => 'required',
    ];
    public function save()
    {

       $validated =  $this->validate();
        $tours = $this->is_edit ? Tour::find($this->id) : new Tour();

        $tours->name = $this->name;
        $tours->duration = $this->duration;

        $tours->inclusions = $this->inclusions;
      
        if ($this->image instanceof UploadedFile) {
            if ($this->is_edit && $tours->image) {
                // Delete the old image if editing
                Storage::delete($tours->image);
            }
        //  dd($this->image);
            // Store the new image
            $path = $this->image->store('$tour', 'public');
            $tours->image = $path;
        } elseif ($this->is_edit) {
            $tours->image = $this->image;
        }
            $tours->tour_code = $this->tour_code;
        $tours->save();
        $message = $this->is_edit ? "Edited Successfully!" : "Created Successfully!";

        Toaster::success($message);
        $this->openModal = false;
        $this->is_edit = false;
        $this->reset();
        $this->dispatch('refreshTable');
    }
    #[On('edit-tour')]
    public function edit(Tour $tour)
    {
        $this->openModal = true;

        $this->name  = $tour->name;
        $this->duration  = $tour->duration;

        $this->inclusions = $tour->inclusions;
        $this->tour_code = $tour->tour_code;
        $this->is_edit = true;
        $this->image = $tour->image;
        $this->id = $tour->id;
    }
    public function render()
    {
        return view('livewire.tour.form');
    }
}
