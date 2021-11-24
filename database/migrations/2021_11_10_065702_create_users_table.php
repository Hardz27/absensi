<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
			$table->unsignedBigInteger('class_id')->nullable();
			$table->unsignedBigInteger('role_id');
			$table->string('nim');
			$table->string('password');
			$table->string('nama');

			$table->softDeletes();
            $table->timestamps();

			$table->foreign('class_id')->references('id')->on('clases');
			$table->foreign('role_id')->references('id')->on('roles');
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
