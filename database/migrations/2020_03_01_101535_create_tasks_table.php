<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tasks', function($table)
        // {
        // $table->increments('id');
        // $table->string('title');
        // $table->text('body');
        // $table->integer('user_id');
        // $table->boolean('done');
        // $table->timestamps();
        // $table->softDeletes();
        // });
            

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('tasks');
        //$table->dropSoftDeletes();
    }
}
