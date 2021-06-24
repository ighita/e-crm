<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('created_by');
            $table->text('description'); // ce presupune task-ul
            $table->timestamp('due_date'); // pana la ce data
            $table->timestamp('completed_at')->nullable(); // cand a fost completat, daca e liber, inseamna ca nu a fost completat.
            $table->unsignedTinyInteger('priority'); // prioritatea - de la 0 la 2 -> 0 = verde, 1 = galben, 2 = rosu
    
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
        Schema::dropIfExists('tasks');
    }
}
