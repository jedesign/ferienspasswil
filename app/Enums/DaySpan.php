<?php

namespace App\Enums;

use Carbon\Carbon;

abstract class DaySpan extends BaseEnum
{
    const FULL = 'full';
    const MORNING = 'morning';
    const AFTERNOON = 'afternoon';

    public static function determineSpan(Carbon $beginning, Carbon $end): string
    {
        $beginningHour = (int)$beginning->format('G');
        $endHour = (int)$end->format('G');

        if ($beginningHour >= 12) {
            return static::AFTERNOON;
        }

        if ($endHour <= 12) {
            return static::MORNING;
        }

        return static::FULL;
    }
}
