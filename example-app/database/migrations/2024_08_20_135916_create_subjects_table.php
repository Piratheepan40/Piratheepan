<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name',length:100);
            $table->decimal('subject_order', total: 8, places: 2);
            $table->string('subject_color',length:100);
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
