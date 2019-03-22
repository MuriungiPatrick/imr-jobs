<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::disableforeignKeyConstraints();
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title');
            $table->string('slug')->unique();
            $table->string('job_type');
            $table->longText('job_description')->nullable();
            $table->text('hourly_rate')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('restrict');

            $table->unsignedBigInteger('category_id')->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');

            $table->softDeletes();
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
        Schema::dropIfExists('jobs');
    }
}
