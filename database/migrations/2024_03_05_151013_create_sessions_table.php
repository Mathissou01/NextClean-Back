<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
   public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('agent_id');
            $table->foreign('agent_id')
                  ->references('id')
                  ->on('agents')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('campus_id');
            $table->foreign('campus_id')
                  ->references('id')
                  ->on('campuses')
                  ->onDelete('cascade');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
        });

        Schema::create('session_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('session_id');
            $table->unsignedBigInteger('task_id');
            $table->timestamps();

            // Clés étrangères
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');

            // Indice unique pour éviter les doublons
            $table->unique(['session_id', 'task_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_tasks');
        Schema::dropIfExists('sessions');
    }
};