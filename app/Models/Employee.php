<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @mixin IdeHelperEmployee
 */
class Employee extends User
{
    use HasFactory;

    public function user()
    {
        return $this->morphOne(User::class, 'role');
    }
}
