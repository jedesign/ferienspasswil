<?php

use App\Models\Allergy;
use App\Models\Participant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergyParticipant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergy_participant', function (Blueprint $table) {
            $table->foreignIdFor(Allergy::class)->constrained();
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
        Schema::dropIfExists('allergy_participant');
    }
}
