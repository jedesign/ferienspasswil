<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @mixin IdeHelperGuardian
 */
class Guardian extends Model
{
    use HasFactory;

    protected $casts = [
        'sja' => 'boolean'
    ];

    protected $guarded = [];

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'role');
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participant::class);
    }

    public function getAddressAttribute(): string
    {
        return $this->street . ' ' . $this->street_number . ', ' . $this->zip . ' ' . $this->place;
    }
}
