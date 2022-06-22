<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('department');
            $table->string('image');
            $table->integer('position');
            $table->string('facebook')->default('https://www.facebook.com/Excelitai/')->nullable();
            $table->string('twitter')->default('https://twitter.com/excel_it_ai')->nullable();
            $table->string('instagram')->default('https://www.instagram.com/excelitai/')->nullable();
            $table->string('linkedin')->default('https://bd.linkedin.com/company/excelitai')->nullable();

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
        Schema::dropIfExists('employers');
    }
}
