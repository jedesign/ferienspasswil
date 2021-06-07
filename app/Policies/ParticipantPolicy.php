<?php

namespace App\Policies;

use App\Models\Participant;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ParticipantPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Participant $participant): bool
    {
        return $user->guardian->participants->contains($participant);
    }
}
