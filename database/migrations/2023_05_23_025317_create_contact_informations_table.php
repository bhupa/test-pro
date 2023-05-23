<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Others'])->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('nationality')->nullable();
            $table->date('dob')->nullable();
            $table->string('mobile')->nullable();
            $table->enum('qualification', ['Slc', 'Plus Two', 'Bachelor Degree','Master Degree','Phd'])->nullable();
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
        Schema::dropIfExists('contact_informations');
    }
}
