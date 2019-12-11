<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('timeslot_id');
            $table->string('type');
            $table->integer('user_id');
            $table->string('date');
            $table->string('start_time');
            $table->string('duration');
            $table->integer('facility_id');
            $table->string('reservation_status');
            $table->string('purpose');
            $table->integer('number');
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
        Schema::dropIfExists('cancel');
    }
}
