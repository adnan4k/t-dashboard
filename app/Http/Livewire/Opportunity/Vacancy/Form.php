<?php

namespace App\Http\Livewire\Opportunity\Vacancy;

use App\Models\Vacancy;
use Livewire\Component;
use Livewire\WithFileUploads;
use Masmerise\Toaster\Toaster;

class Form extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $experience;
    public $deadline;
    public $location;
    public $jobType;
    public $qualifications;
    public $keyResponsibilities;
    public $languages;
    public $startDate;
    public $email;
    public $phone;
    public $is_edit;
    public $id = null;
    protected $listeners = ['vacancyModal' => 'vacancyModal'];
    public $openModal = false;
    public function vacancyModal()
    {
        $this->openModal = true;
    }
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'experience' => 'required|string|max:255',
        'deadline' => 'required|date|after:today',
        'location' => 'required|string|max:255',
        'jobType' => 'required|string|max:255', // Can use enum or predefined values like 'Full-time', 'Part-time'
        'qualifications' => 'required|string',
        'keyResponsibilities' => 'required|string',
        'languages' => 'required|string|max:255', // Comma-separated languages
        'startDate' => 'required|date|after:today',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20', // Can add regex for phone format validation
    ];

    public function save()
    {
        $this->validate();

        $vacancy = $this->is_edit ? Vacancy::findOrFail($this->id) : new Vacancy();

        $vacancy->title = $this->title;
        $vacancy->description = $this->description;
        $vacancy->experience = $this->experience;
        $vacancy->deadline = $this->deadline;
        $vacancy->location = $this->location;
        $vacancy->jobType = $this->jobType;
        $vacancy->qualifications = $this->qualifications;
        $vacancy->keyResponsibilities = $this->keyResponsibilities;
        $vacancy->languages = $this->languages;
        $vacancy->startDate = $this->startDate;
        $vacancy->email = $this->email;
        $vacancy->phone = $this->phone;

        $vacancy->save();

        $message = $this->is_edit ? "Edited Successfully!" : "Created Successfully!";
        Toaster::success($message);
        $this->openModal = false;
        $this->is_edit = false;
        $this->reset();
        $this->dispatch('refreshTable');
    }


    public function render()
    {
        return view('livewire.opportunity.vacancy.form');
    }
}
