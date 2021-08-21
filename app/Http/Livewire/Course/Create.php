<?php

namespace App\Http\Livewire\Course;

use App\Enums\CourseState;
use App\Enums\GradeGroup;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{
    public string $title = '';
    public string $description = '';
    public $state = '';
    public string $beginning_date = '';
    public string $beginning_time = '';
    public string $end_date = '';
    public string $end_time = '';
    public $min_participants = 0;
    public $max_participants = 0;
    public string $grade_group = GradeGroup::ALL;
    public string $meeting_point = '';
    public ?string $clothes = null;
    public ?string $bring_alongs = null;
    public $price = 0.00;

    public function save(): void
    {
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'state' => ['required', Rule::in(CourseState::getConstants())],
            'beginning_date' => ['required', 'date_format:Y-m-d'],
            'beginning_time' => ['required', 'date_format:h:i'],
            'end_date' => ['required', 'date_format:Y-m-d'],
//            'end_time' => ['required', 'date_format:h:i'],
            'min_participants' => ['required', 'integer', 'min:1'],
            'max_participants' => ['required', 'integer', 'min:1', 'gt:min_participants'],
            'grade_group' => ['required', Rule::in(GradeGroup::getConstants())],
            'meeting_point' => ['required', 'string'],
            'clothes' => ['nullable', 'string'],
            'bring_alongs' => ['nullable', 'string'],
            'price' => ['numeric'],
        ]);

        Course::create(
            [
                'title' => $this->title,
                'description' => $this->description,
                'state' => $this->state,
                'beginning' => new Carbon($this->beginning_date . ' ' . $this->beginning_time),
                'end' => new Carbon($this->end_date . ' ' . $this->end_time),
                'min_participants' => $this->min_participants,
                'max_participants' => $this->max_participants,
                'grade_group' => $this->grade_group,
                'meeting_point' => $this->meeting_point,
                'clothes' => $this->clothes,
                'bring_alongs' => $this->bring_alongs,
                'price' => $this->price,
            ]);

        $this->redirect(route('admin.courses'));
    }


    public function render(): Factory|View|Application
    {
        return view('livewire.course.create');
    }
}
