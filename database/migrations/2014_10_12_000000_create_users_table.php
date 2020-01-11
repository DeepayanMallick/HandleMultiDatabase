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
          $table->bigIncrements('id');
          $table->string('title')->nullable();
          $table->string('first_name')->nullable();
          $table->string('last_name')->nullable();
          $table->timestamp('last_login_at')->nullable();
          $table->integer('login_count')->default(0);
          $table->string('company')->nullable();
          $table->string('email')->unique();
          $table->string('telephone', 30)->nullable();
          $table->string('department')->nullable();
          $table->dateTime('date_of_birth')->nullable();
          $table->timestamp('work_anniversary')->nullable();
          $table->string('gender')->nullable();
          $table->integer('have_kids')->nullable();
          $table->string('user_group', 50)->nullable();
          $table->string('avatar')->nullable();
          $table->integer('profile_visibility')->nullable();
          $table->integer('role')->nullable();
          $table->integer('status')->nullable();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
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
