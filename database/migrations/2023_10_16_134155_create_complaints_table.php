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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->foreignId('student_id')->constrained();
            $table->foreignId('section_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('status');
            $table->string('comment');
            $table->timestamps('time_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
