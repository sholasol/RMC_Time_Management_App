<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('approved_by')->unsigned()->nullable();
            $table->string('project');
            $table->bigInteger('project_id')->unsigned()->nullable();
            $table->text('comment')->nullable();
            $table->string('docs')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();

            $table->string('task')->nullable();
            $table->string('code')->nullable();


            $table->date('location')->nullable();
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
        Schema::dropIfExists('timesheets');
    }
}
