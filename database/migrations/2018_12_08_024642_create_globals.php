<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('globals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('field_name')->nullable();
            $table->string('field_value')->nullable();
            $table->string('display_name')->nullable();
            $table->integer('users_id')->unsigned()->nullable(); 
            
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('globals');
    }
}
