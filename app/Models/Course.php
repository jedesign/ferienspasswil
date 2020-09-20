<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCourse
 */
class Course extends Model
{
    use HasFactory;

    public function allergies()
    {
        return $this->belongsToMany(Allergy::class);
    }

    public function participants()
    {
        return $this->belongsToMany(Participant::class);
    }
}
