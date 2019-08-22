<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient_name');
            $table->integer('age');
            $table->integer('sex');
            $table->string('phone')->unique();
            $table->integer('blood');
            $table->integer('sample_type_id');
            $table->integer('country');
            $table->integer('state');
            $table->integer('district');
            $table->integer('city')->nullable();
            $table->integer('area');
            $table->string('address')->nullable();
            $table->integer('added_by');
            $table->timestamp('added_on')->nullable();
            $table->integer('modify_by')->nullable();
            $table->timestamp('modify_on')->nullable();
            $table->tinyInteger('status');
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
