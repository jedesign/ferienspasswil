<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperAllergy
 */
class Allergy extends Model
{
    use HasFactory;

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participant::class);
    }
}
