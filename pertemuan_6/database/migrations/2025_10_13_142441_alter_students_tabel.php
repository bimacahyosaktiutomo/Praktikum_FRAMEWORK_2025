<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('lecturer_id')->nullable()->change();
            $table->dropForeign(['lecturer_id']);
            $table->foreign('lecturer_id')->references('id')->on('lecturers')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['lecturer_id']);
            $table->foreign('lecturer_id')->references('id')->on('lecturers')->onDelete('restrict');
        });
    }
};

