<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_name');
            $table->tinyInteger('hierarchy')->nullable();
            $table->integer('user_group_id')->unsigned()->nullable()->comment('null for all groups');  
            $table->tinyInteger('status')->default(1)->comment('0: inactive 1: active');           
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps(); 
            
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
       
        });
        
        Schema::create('user_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned()->nullable();
            $table->integer('user_role_id')->unsigned()->nullable();            
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
            
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('user_role_id')->references('id')->on('user_role_master')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('user_roles_master');
        Schema::dropIfExists('user_roles');
    }
}
