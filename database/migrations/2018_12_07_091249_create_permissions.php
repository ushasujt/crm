<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->text('user_role_ids')->comment('comma separated values');    
            $table->text('user_group_ids')->comment('comma separated values');    
            $table->text('users_ids')->comment('comma separated values');     
            $table->string('module', 150)->nullable();
            $table->string('controller', 200)->nullable();
            $table->string('action', 200)->nullable();
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
       Schema::dropIfExists('permissions');
    }
}
