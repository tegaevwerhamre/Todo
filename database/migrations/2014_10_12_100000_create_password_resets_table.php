<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //     Schema::create('password_resets', function (Blueprint $table) {
    //         $table->string('email')->index();
    //         $table->string('token');
    //         $table->timestamp('created_at')->nullable();
    //     });
        // Schema::create('tasks', function($table)
        // {
        // $table->increments('id');
        // $table->string('title');
        // $table->text('body');
        // $table->integer('user_id');
        // $table->boolean('done');
        // $table->timestamps();
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
    }
}
