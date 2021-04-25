<?php

namespace App\Listeners;

use App\Enums\DaySpan;
use App\Events\CourseSpanCalculated as CourseSpanCalculatedEvent;
use Carbon\Carbon;

class CourseSpanCalculated
{
    public function handle(CourseSpanCalculatedEvent $event): void
    {
        $event->course->day_span = DaySpan::determineSpan(
            new Carbon($event->course->beginning),
            new Carbon($event->course->end)
        );
    }
}
