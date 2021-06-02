<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
           $table->id();
           $table->string('doc_code');
           $table->string('n_id')->unique();
           $table->string('FirstName');
           $table->string('LastName');
           $table->string('Gender');
           $table->string('DateOfBirth');
           $table->string('PhoneNumber');
           $table->string('Fax');
           $table->string('Email');
           $table->string('Passcode');
           $table->string('country');
           $table->string('city');
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
        Schema::dropIfExists('doctors');
    }
}
