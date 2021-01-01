<?php

namespace App\View\Components\Participant;

use App\Models\Participant;
use Illuminate\View\Component;

class DeleteModal extends Component
{
    public function __construct(
        public Participant $participant
    )
    {
    }

    public function render()
    {
        return view('components.participant.delete-modal');
    }
}
