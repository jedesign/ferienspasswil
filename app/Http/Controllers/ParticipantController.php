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
        return view('dashboard.participant.edit', compact('participant'));
    }

    public function delete(Participant $participant)
    {
        return view('dashboard.participant.delete', compact('participant'));
    }

}
