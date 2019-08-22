<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('name');
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->bigInteger('phone');
            $table->string('name_code');
            $table->string('username');
            $table->integer('groupid');
            $table->integer('department_id');
            $table->integer('superuser');
            $table->timestamp('added_on')->nullable();
            $table->timestamp('modify_on')->nullable();
            $table->timestamp('lastvisit')->nullable();
            $table->integer('country');
            $table->integer('state');
            $table->integer('district');
            $table->integer('city');
            $table->integer('area'); //upazila, thana
            $table->string('image');
            $table->tinyInteger('status');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
