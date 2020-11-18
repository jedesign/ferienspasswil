<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class ParticipantController extends Controller
{
    public function edit(Participant $participant)
    {
        return view('dashboard.participant', compact('participant'));
    }
}
