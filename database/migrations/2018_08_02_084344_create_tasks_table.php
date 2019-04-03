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
        Schema::create('tasks',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('project_id')->unsigned()->index();
                $table->string('title');
                $table->text('description')->nullable();
                $table->integer('status_id')->unsigned()->index()->default(0);
                $table->integer('master_id')->unsigned()->index();
                $table->integer('performer_id')->unsigned()->index();
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
        Schema::dropIfExists('tasks');
    }
}