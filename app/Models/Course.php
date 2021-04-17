<?php

namespace App\Models;

use App\Events\CourseSpanCalculated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperCourse
 */
class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    protected $casts = [
        'beginning' => 'datetime',
        'end' => 'datetime',
    ];

    protected $dispatchesEvents = [
        'saving' => CourseSpanCalculated::class
    ];

    public function allergies(): BelongsToMany
    {
        return $this->belongsToMany(Allergy::class);
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participant::class);
    }
}
