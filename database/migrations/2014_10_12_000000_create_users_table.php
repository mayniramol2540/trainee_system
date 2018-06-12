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
            $table->string('name',100)->number_format();
            $table->enum('gender',['male','female'])->nullable();
            $table->date('birt_date')->nullable();
            $table->string('university',100)->nullable();
            $table->string('major',100)->nullable();
            $table->string('email',100)->unique()->nullable();
            $table->string('password',100)->nullable();
            $table->enum('role',['user','admin']);
            $table->enum('type',['general','facebook','google']);
            $table->rememberToken();
            $table->timestamps();

        });
        //////eiei
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
