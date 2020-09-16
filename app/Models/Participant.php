<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperParticipant
 */
class Participant extends Model
{
    use HasFactory;

    public function allergies()
    {
        return $this->belongsToMany(Allergy::class);
    }

    public function guardians()
    {
        return $this->belongsToMany(Guardian::class);
    }
}
