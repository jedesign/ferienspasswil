<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    public function index(): Factory|View|Application
    {
        $coursesPerDay = [];
        $courses = Course::orderBy('beginning')->get(['title', 'beginning', 'end']);

        if (!$courses) {
            return view('course.index', compact('coursesPerDay'));
        }

        $period = CarbonPeriod::create(
            $courses->first()->beginning->startOfWeek(),
            $courses->last()->beginning->endOfWeek(Carbon::FRIDAY)
        );

        foreach ($period as $day) {
            if ($day->isWeekday()) {
                $coursesPerDay[$day->format('Ymd')] = ['day' => $day, 'courses' => []];
            }
        }

        /** @var Course $course */
        foreach ($courses as $course) {
            // TODO[mr]: sort courses in separate arrays inside day following the dayspan logic (16.04.21 mr)
            $coursesPerDay[$course->beginning->format('Ymd')]['courses'][] = $course;
        }

        return view('course.index', compact('coursesPerDay'));
    }
}
