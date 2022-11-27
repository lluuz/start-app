<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_up_enote');
            $table->string('sf_up_enote', 10);
            $table->string('naziv', 50);
            $table->string('naslov', 100);
            $table->unsignedInteger('id_poste');
            $table->string('oen', 10);
            $table->string('sf_ue_ajpes', 10);
            $table->unsignedInteger('id_stat_regije');
            $table->string('status_sf', 3);
            $table->timestamp('dat_sp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
