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
        Schema::create('featured_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // عنوان المشروع
            $table->string('target_goal'); // الهدف المطلوب
            $table->string('achieved_value'); // القيمة المحققة
            $table->integer('progress_percentage'); // نسبة التقدم
            $table->string('campaign_name'); // اسم الحملة
            $table->string('subtitle'); // عنوان ثانوي
            $table->text('description'); // شرح المشروع
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_projects');
    }
};
