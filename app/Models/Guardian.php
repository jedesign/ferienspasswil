<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function user()
    {
        return $this->morphOne(User::class, 'role');
    }

    public function participants()
    {
        return $this->belongsToMany(Participant::class);
    }

    public function address()
    {
        return $this->street . ' ' . $this->street_number . ', ' . $this->zip . ' ' . $this->place;
    }
}
