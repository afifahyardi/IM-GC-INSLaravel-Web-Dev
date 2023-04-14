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
        Schema::create('table_film', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->text("ringkasan");
            $table->integer("tahun");
            $table->string("poster");
            $table
                ->foreignId("genre_id")
                ->references("id")
                ->on("genre");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_film');
    }
};
