<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticEquipmentUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_equipment_uses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('diag_test_id');
            $table->integer('equipment_id');
            $table->string('required_time');
            $table->integer('added_by');
            $table->timestamp('added_on')->nullable();
            $table->integer('modify_by');
            $table->timestamp('modify_on')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('diagnostic_equipment_uses');
    }
}
