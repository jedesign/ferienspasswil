<?php

namespace App\Http\Livewire\Participant;

use App\Models\Allergy;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{
    public string $firstname = '';
    public string $lastname = '';
    public string $birthdate = '';
    public string $gender = 'm';
    public string|int $school_grade = '';
    public bool $photos_allowed = true;
    public ?string $note = null;
    public array $allergies = [];
    public Collection $availableAllergies;

    public Participant $participant;

    public function mount()
    {
        $this->availableAllergies = Allergy::orderBy('title', 'asc')->get();
    }

    public function save()
    {
        $this->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date_format:Y-m-d'],
            'gender' => ['required', Rule::in(\App\Enums\Gender::getConstants())],
            'school_grade' => ['required', 'integer', 'min:1', 'max:6'],
            'photos_allowed' => ['boolean'],
            'note' => ['nullable', 'string'],
            'allergies' => ['array']
        ]);

        $participant = Participant::create(
            [
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'birthdate' => $this->birthdate,
                'gender' => $this->gender,
                'school_grade' => $this->school_grade,
                'photos_allowed' => $this->photos_allowed,
                'note' => $this->note,
            ]);

        $participant->guardians()->attach(auth()->user()->guardian->id);

        foreach ($this->allergies as $id => $value) {
            if (!$value) {
                continue;
            }
            $participant->allergies()->attach($id);
        }

        $this->redirect(route('dashboard.index'));
    }

    public function render()
    {
        return view('livewire.participant.create');
    }
}
