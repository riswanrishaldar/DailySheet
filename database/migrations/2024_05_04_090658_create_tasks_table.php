<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('task_id');
            $table->unsignedBigInteger('id')->nullable();
            $table->foreign('id')->references('id')->on('trainers');
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->string('chat_count')->nullable();
            $table->string('batch')->nullable();
            $table->string('call')->nullable();
            $table->string('call_connected')->nullable();
            $table->string('task_assigned')->nullable();
            $table->string('webinar')->nullable();
            $table->string('live_class')->nullable();
            $table->string('status')->nullable();
            $table->string('self_learning')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
