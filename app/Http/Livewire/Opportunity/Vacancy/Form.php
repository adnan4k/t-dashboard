<?php

namespace App\Http\Livewire\Opportunity\Vacancy;

use App\Models\Vacancy;
use Livewire\Component;
use Livewire\WithFileUploads;

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

    $this->reset();
    // toastr()->success($this->is_edit ? 'Vacancy updated successfully!' : 'Vacancy created successfully!');
    return redirect()->route('vacancies');
}


    public function render()
    {
        return view('livewire.opportunity.vacancy.form');
    }
}
