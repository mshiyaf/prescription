<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('appointment_id')->unsigned();
            $table->string('medicine_name');
            $table->string('medicine_brand');
            $table->string('medicine_strength');
            $table->string('dosage_form');
            $table->string('duration');
            $table->string('intake_timing');
            $table->boolean('morning');
            $table->integer('morning_qty');
            $table->boolean('afternoon');
            $table->integer('afternoon_qty');
            $table->boolean('evening');
            $table->integer('evening_qty');
            $table->string('custom_timing');
            $table->timestamps();
        });

        Schema::table('prescriptions',function($table){
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
