<?php

use App\Models\Allergy;
use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergyCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergy_course', function (Blueprint $table) {
            $table->foreignIdFor(Allergy::class)->constrained();
            $table->foreignIdFor(Course::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allergy_course');
    }
}
