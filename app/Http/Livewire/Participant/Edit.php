<?php

namespace App\Http\Livewire\Participant;

use App\Models\Participant;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public string $firstname;
    public string $lastname;
    public string $birthdate;
    public string $gender;
    public int $school_grade;
    public bool $photos_allowed;
    public ?string $note;

    public Participant $participant;

    public function mount()
    {
        $this->firstname = $this->participant->firstname;
        $this->lastname = $this->participant->lastname;
        $this->birthdate = $this->participant->birthdate->format('Y-m-d');
        $this->gender = $this->participant->gender;
        $this->school_grade = $this->participant->school_grade;
        $this->photos_allowed = $this->participant->photos_allowed;
        $this->note = $this->participant->note;
    }

    public function update()
    {
        $this->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date_format:Y-m-d'],
            'gender' => ['required', Rule::in(\App\Enums\Gender::getConstants())],
            'school_grade' => ['required', 'integer', 'min:1', 'max:6'],
            'photos_allowed' => ['boolean'],
            'note' => ['string'],
        ]);

        $this->participant->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'birthdate' => $this->birthdate,
            'gender' => $this->gender,
            'school_grade' => $this->school_grade,
            'photos_allowed' => $this->photos_allowed,
            'note' => $this->note,
        ]);

        $this->redirect(route('dashboard.index'));
    }

    public function render()
    {
        return view('livewire.participant.edit');
    }
}
