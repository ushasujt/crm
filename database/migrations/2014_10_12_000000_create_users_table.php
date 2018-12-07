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
        Schema::create('user_group_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_name');
            $table->tinyInteger('hierarchy')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0: inactive 1: active');
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_group_id')->unsigned()->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('status')->default(1)->comment('0: inactive 1: active');
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('user_group_id')->references('id')->on('user_group_master')->onUpdate('cascade')->onDelete('set null');
        });
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned()->nullable();
            $table->string('fname')->nullable();            
            $table->string('lname')->nullable();  
            $table->tinyInteger('gender')->default(1)->comment('1:male, 2: female, 3: others');
            $table->date('dob')->nullable();
            $table->integer('city_id')->unsigned()->nullable();
            $table->string('photo')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
            
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_group');
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_profiles');
    }
}
