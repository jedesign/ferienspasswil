<?php

namespace App\Http\Controllers;

use App\Enums\DaySpan;
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
        $courses = Course::orderBy('beginning')->get(['title', 'beginning', 'end', 'day_span', 'slug', 'state']);
        if ($courses->isEmpty()) {
            return view('course.index', compact('coursesPerDay'));
        }

        $period = CarbonPeriod::create(
            $courses->first()->beginning->startOfWeek(),
            $courses->last()->beginning->endOfWeek(Carbon::FRIDAY)
        );

        foreach ($period as $day) {
            if ($day->isWeekday()) {
                $coursesPerDay[$day->format('Ymd')] = ['day' => $day];
                foreach (DaySpan::getConstants() as $span) {
                    $coursesPerDay[$day->format('Ymd')][$span] = [];
                }
            }
        }

        /** @var Course $course */
        foreach ($courses as $course) {
            $coursesPerDay[$course->beginning->format('Ymd')][$course->day_span][] = $course;
        }

        return view('course.index', compact('coursesPerDay'));
    }

    public function show(Course $course): Factory|View|Application
    {
        return view('course.show', compact('course'));
    }

    public function create()
    {
        return view('admin.course.create');
    }


    public function edit(Course $course): Factory|View|Application
    {
        return view('admin.course.edit', compact('course'));
    }

}
