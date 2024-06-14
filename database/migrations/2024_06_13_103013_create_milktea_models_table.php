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
        Schema::create('milktea_models', function (Blueprint $table) {
            $table->id();
            $table->string('milktea');
            $table->enum('size',['medio','grande']);
            $table->enum('price',[49,59]);
            $table->enum('pearl',['nopearl', "w/pearl"])->default('w/pearl');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milktea_models');
    }
};
