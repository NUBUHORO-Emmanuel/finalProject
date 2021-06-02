<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
          $table->string('gender');
          $table->string('FirstName');
          $table->string('LastName');
          $table->string('N_id');
          $table->string('birthday');
          $table->string('sex');
          $table->string('country');
          $table->string('city');
          $table->string('tel');
          $table->string('Email');
          $table->string('pass');
          $table->string('Fname');
          $table->string('Mname');
          $table->string('na_id');
          $table->string('Telephone');
          $table->string('relationship');
          $table->string('birthplace');
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
        Schema::dropIfExists('patients');
    }
}
