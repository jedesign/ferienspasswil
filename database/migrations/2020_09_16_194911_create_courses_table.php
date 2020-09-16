<?php

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
            $table->text('description');
            $table->boolean('active')->default(true);
            $table->dateTime('beginning');
            $table->dateTime('end');
            $table->unsignedInteger('min_participants')->default(5);
            $table->unsignedInteger('max_participants');
            $table->boolean('weather_sensitive')->default(false);
            $table->boolean('canceled_due_to_weather')->default(false);
            $table->enum('grade_group', ['all', 'lower', 'intermediate'])
                ->default('all')
                ->comment('lower => 1. – 3. grade, intermediate => 4. – 6. grade, all => no limitation');
            $table->string('meeting_point');
            $table->string('clothes')->nullable();
            $table->string('bring_alongs')->nullable();
            $table->float('price');
            $table->timestamps();
            // TODO[mr]: include pdf path (16.09.20 mr)
            // TODO[mr]: include pdf description (16.09.20 mr)
            // TODO[mr]: include image (16.09.20 mr)
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
