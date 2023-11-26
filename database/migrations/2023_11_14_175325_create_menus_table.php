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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('menu_type', 11);
            $table->string('slug');
            $table->string('image');
            $table->integer('content_id', 11);
            $table->integer('parent_id', 11);
            $table->string('page_title');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->string('default');
            $table->tinyInteger('created_by', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
