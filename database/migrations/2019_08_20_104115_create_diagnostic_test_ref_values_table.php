<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticTestRefValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_test_ref_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('diag_test_id');
            $table->integer('age_class_id');
            $table->string('reference_value');
            $table->text('description')->nullable();
            $table->integer('added_by');
            $table->timestamp('added_on')->nullable();
            $table->integer('modify_by');
            $table->timestamp('modify_on')->nullable();
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
        Schema::dropIfExists('diagnostic_test_ref_values');
    }
}
