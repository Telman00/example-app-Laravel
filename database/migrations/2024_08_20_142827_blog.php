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
        // Schema::create('personal_access_tokens', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedInteger('view_count');
        //     $table->string('name');
        //     $table->string('title');
        //     $table->text('context');
        //     $table->integer('cat_id')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
