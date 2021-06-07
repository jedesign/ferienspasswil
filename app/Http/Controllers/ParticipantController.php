<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class ParticipantController extends Controller
{
    public function create()
    {
        return view('dashboard.participant.create');
    }

    public function edit(Participant $participant)
    {
        $this->authorize('update', $participant);
        return view('dashboard.participant.edit', compact('participant'));
    }

    public function delete(Participant $participant)
    {
        $this->authorize('update', $participant);

        $participant->allergies()->detach();
        $participant->guardians()->detach();
        $participant->courses()->detach();
        $participant->delete();

        return redirect(route('dashboard.index'));
    }
}
