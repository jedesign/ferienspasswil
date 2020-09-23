<?php

use App\Models\Course;
use App\Models\Participant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseParticipant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_participant', function (Blueprint $table) {
            $table->foreignIdFor(Course::class)->constrained();
            $table->foreignIdFor(Participant::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_participant');
    }
}
