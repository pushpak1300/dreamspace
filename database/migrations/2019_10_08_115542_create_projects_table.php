<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('staff_id');
            $table->string('topic')->nullable();
            $table->string('prsentation')->nullable();
            $table->string('report')->nullable();
            $table->string('video')->nullable();
            $table->string('github_link')->nullable();
            $table->boolean('is_research_published')->nullable()->default(false);
            $table->string('research_paper')->nullable();
            $table->integer('score')->unsigned()->nullable()->default(0);
            $table->integer('domain')->unsigned()->nullable()->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
