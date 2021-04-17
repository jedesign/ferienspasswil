<?php

namespace App\Events;

use App\Models\Course;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CourseSpanCalculated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Course $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }
}
