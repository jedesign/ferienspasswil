<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use \Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class ParticipantController extends Controller
{
    public function create(): Factory|View|Application
    {
        return view('dashboard.participant.create');
    }

    public function edit(Participant $participant): Factory|View|Application
    {
        $this->authorize('update', $participant);
        return view('dashboard.participant.edit', compact('participant'));
    }

    public function delete(Participant $participant): Redirector|Application|RedirectResponse
    {
        $this->authorize('update', $participant);

        $participant->allergies()->detach();
        $participant->guardians()->detach();
        $participant->courses()->detach();
        $participant->delete();

        return redirect(route('dashboard.index'));
    }
}
