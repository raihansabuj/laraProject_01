<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticTestReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_test_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('diag_test_id');
            $table->integer('patient_id');
            $table->integer('sampling_by');
            $table->timestamp('sampling_on')->nullable();
            $table->integer('check_by');
            $table->integer('approved_by');
            $table->timestamp('delivery_on')->nullable();
            $table->string('test_result');
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
        Schema::dropIfExists('diagnostic_test_reports');
    }
}
