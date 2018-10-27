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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable()->index();
            $table->string('mobile',11)->unique()->index();
            $table->boolean('check_mobile')->default(false);
            $table->boolean('check_email')->default(false);
            $table->string('password');
            $table->string('password');
            $table->string('token');
            $table->unsignedInteger('code');
            $table->boolean('susspend');
            $table->unsignedInteger('status')->default(0);
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
