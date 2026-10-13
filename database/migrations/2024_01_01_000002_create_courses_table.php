<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category', 80);
            $table->string('instructor', 100);
            $table->string('level', 40);
            $table->string('duration', 40);
            $table->unsignedSmallInteger('lessons')->default(0);
            $table->unsignedInteger('students')->default(0);
            $table->decimal('rating', 2, 1)->default(5.0);
            $table->string('accent', 20)->default('violet');
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
