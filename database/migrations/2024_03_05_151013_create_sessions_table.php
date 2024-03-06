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
      $table->unsignedBigInteger('task_id');
      $table
        ->foreign('task_id')
        ->references('id')
        ->on('tasks')
        ->onDelete('cascade');

      $table->unsignedBigInteger('agent_id');
      $table
        ->foreign('agent_id')
        ->references('id')
        ->on('agents')
        ->onDelete('cascade');
      $table->dateTime('start_time');
      $table->dateTime('end_time');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('sessions');
  }
};
