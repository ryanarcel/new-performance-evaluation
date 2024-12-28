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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->integer('evaluator_id');
            $table->unsignedBigInteger('evaluee_id')->nullable();
            $table->foreign('evaluee_id')
                ->references('id')
                ->on('evaluees')
                ->onDelete('set null');
            $table->integer('tool_id');
            $table->string('subject');
            $table->date('date')->required();
            $table->string('course')->nullable();
            $table->enum('education_level', ['elementary', 'junior_high', 'senior_high', 'college']);
            $table->enum('year_level', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]);
            $table->unsignedBigInteger('duration_id')->nullable();
            $table->foreign('duration_id')
                ->references('id')
                ->on('durations')
                ->onDelete('restrict');
            $table->enum('semester', [1, 2, 3])->nullable();
            $table->enum('term', [1, 2])->nullable();
            $table->string('access_key', 6)->unique();
            $table->enum('status', ['draft', 'published', 'closed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
