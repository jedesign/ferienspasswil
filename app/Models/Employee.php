<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @mixin IdeHelperEmployee
 */
class Employee extends User
{
    use HasFactory;

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'role');
    }
}
