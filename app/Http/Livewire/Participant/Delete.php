<?php

namespace App\Http\Livewire\Participant;

use App\Models\Participant;
use Livewire\Component;

class Delete extends Component
{
    public Participant $participant;

    public function delete(): void
    {
        $this->participant->allergies()->detach();
        $this->participant->guardians()->detach();
        $this->participant->courses()->detach();
        $this->participant->delete();

        $this->redirect(route('dashboard.index'));
    }

    public function render()
    {
        return view('livewire.participant.delete');
    }
}
