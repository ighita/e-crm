<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->default(0)->nullable(); // daca persoana de contact apartine unui client
            $table->string('name'); // nume
            $table->string('phone'); // telefon
            $table->string('email');
            $table->string('position'); // functie
            $table->boolean('favorite')->nullable(); 
            $table->timestamps(); // cand a fost creat si cand  a fost actualizat
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
