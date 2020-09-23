<?php

use App\Models\Guardian;
use App\Models\Participant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardianParticipant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardian_participant', function (Blueprint $table) {
            $table->foreignIdFor(Guardian::class)->constrained();
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
        Schema::dropIfExists('guardian_participant');
    }
}
