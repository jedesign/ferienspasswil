<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperParticipant
 */
class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'lastname', 'birthdate', 'gender', 'school_grade', 'photos_allowed', 'note'
    ];
    protected $casts = [
        'birthdate' => 'date'
    ];

    public function allergies(): BelongsToMany
    {
        return $this->belongsToMany(Allergy::class);
    }

    public function guardians(): BelongsToMany
    {
        return $this->belongsToMany(Guardian::class);
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    public function path(): string
    {
        return "/kind/$this->id";
    }
}
