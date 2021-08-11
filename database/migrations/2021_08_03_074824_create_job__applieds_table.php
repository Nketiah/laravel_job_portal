<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAppliedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job__applieds', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("lastname");
            $table->integer("age");
            $table->string("religion");
            $table->string("nationality");
            $table->string("institution");
            $table->string("nss_certificate");
            $table->string("resume");
            $table->boolean("status")->default(0);
            $table->integer("company_id");
            $table->timestamps();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("job_model_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job__applieds');
    }
}
