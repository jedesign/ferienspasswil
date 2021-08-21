<?php

namespace App\Models;

use App\Events\CourseSpanCalculated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @mixin IdeHelperCourse
 */
class Course extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'description',
        'beginning',
        'end',
        'min_participants',
        'max_participants',
        'grade_group',
        'meeting_point',
        'clothes',
        'bring_alongs',
        'price'
    ];

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

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(fn($model) => ($model->beginning) ? "$model->title {$model->beginning->format('Y')}" : $model->title)
            ->saveSlugsTo('slug');
    }
}
