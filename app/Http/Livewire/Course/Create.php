<?php

namespace App\Http\Livewire\Course;

use App\Enums\DaySpan;
use App\Enums\GradeGroup;
use App\Models\Course;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Create extends Component
{
    public string $title = '';
    public string $description = '';
    public string $beginning = '';
    public string $end = '';
    public int $min_participants = 0;
    public int $max_participants = 0;
    public string $grade_group = GradeGroup::ALL;
    public string $meeting_point = '';
    public ?string $clothes;
    public ?string $bring_alongs;
    public float $price = 0;

    public function save(): void
    {
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'beginning' => ['required', 'date_format:Y-m-d'],
            'end' => ['required', 'date_format:Y-m-d'],
            'min_participants' => ['required', 'integer', 'min:1'],
            'max_participants' => ['required', 'integer', 'gt:min_participants'],
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
                'beginning' => $this->beginning,
                'end' => $this->end,
                'day_span' => $this->day_span,
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
