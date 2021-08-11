<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_models', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_location');
            $table->string('company_name');
            $table->string('category');
            $table->string('job_type'); //remote or office
            $table->text('job_description')->nullable();
            $table->string('job_requirement');
            $table->string('company_logo')->nullable();
            $table->foreignId("user_id")->constrained();

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
        Schema::dropIfExists('job_models');
    }
}
