<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::table('employees',function(Blueprint $table){
            $table->integer('designation_id')->after('last_name');
        });
    }

  
    public function down(): void
    {
        
    }
};
