<?php

namespace App\Models;

use App\Traits\UserBaseInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @mixin IdeHelperGuardian
 */
class Guardian extends Model
{
    use HasFactory, UserBaseInformation;

    protected $fillable = [
        'street', 'street_number', 'postcode', 'city'
    ];

    protected $casts = [
        'postcode' => 'integer',
        'sja' => 'boolean'
    ];

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
        return $this->street . ' ' . $this->street_number . ', ' . $this->postcode . ' ' . $this->city;
    }

    public function streetAndNumber(): string
    {
        return "$this->street $this->street_number";
    }

    public function postcodeAndCity(): string
    {
        return "$this->postcode $this->city";
    }
}
