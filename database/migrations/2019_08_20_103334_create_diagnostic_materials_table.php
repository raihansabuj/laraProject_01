<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnostic_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('uom');
            $table->integer('added_by');
            $table->timestamp('added_on')->nullable();
            $table->integer('modify_by');
            $table->timestamp('modify_on')->nullable();
            $table->integer('status');
            $table->string('note')->nullable();
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
        Schema::dropIfExists('diagnostic_materials');
    }
}
