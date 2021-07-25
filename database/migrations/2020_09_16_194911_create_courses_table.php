<?php

use App\Enums\CourseState;
use App\Enums\DaySpan;
use App\Enums\GradeGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->enum('state', CourseState::getConstants())->default('draft');
            $table->string('state_message')->nullable();
            $table->dateTime('beginning');
            $table->dateTime('end');
            $table->enum('day_span', DaySpan::getConstants());
            $table->unsignedInteger('min_participants')->default(5);
            $table->unsignedInteger('max_participants');
            $table->enum('grade_group', GradeGroup::getConstants())
                ->default('all')
                ->comment('lower => 1. – 3. grade, intermediate => 4. – 6. grade, all => no limitation');
            $table->string('meeting_point');
            $table->string('clothes')->nullable();
            $table->string('bring_alongs')->nullable();
            $table->float('price');
            $table->timestamps();
            // TODO[mr,rw]: include pdf path (16.09.20 mr)
            // TODO[mr,rw]: include pdf description (16.09.20 mr)
            // TODO[mr,rw]: include image (16.09.20 mr)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
