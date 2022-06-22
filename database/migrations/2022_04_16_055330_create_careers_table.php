<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('job_tittle');
            $table->string('vacancy');
            $table->string('experience');
            $table->string('deadline');
            $table->string('job_type');
            $table->text('job_summary');
            $table->text('role_responsibilities');
            $table->text('minimum_qualification');
            $table->text('additional_qualification');
            $table->text('compensation_other_benefit');
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
        Schema::dropIfExists('careers');
    }
}
