<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('tools')) {
            DB::table('tools')->insert([
                [
                    'name' => 'Teacher Evaluation Tool',
                    'description' => 'This is the evaluation tools for teachers',
                    'icon' => 'person-check'
                ],
                [
                    'name' => 'Administrator Evaluation Tool',
                    'description' => 'This is the evaluation tools for administrators',
                    'icon' => 'check-square'
                ],
                [
                    'name' => 'Supervisor Evaluation Tool',
                    'description' => 'This is the evaluation tools for supervisors',
                    'icon' => 'circle-check'
                ],
                [
                    'name' => 'Non-Teaching Evaluation Tool',
                    'description' => 'This is the evaluation tools for non-teaching staff',
                    'icon' => 'people-fill'
                ],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('tools')->where('name', 'Teacher Evaluation Tool')->delete();
        DB::table('tools')->where('name', 'Administrator Evaluation Tool')->delete();
        DB::table('tools')->where('name', 'Supervisor Evaluation Tool')->delete();
        DB::table('tools')->where('name', 'Non-Teaching Evaluation Tool')->delete();
    }
};
