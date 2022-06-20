<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_menue', function (Blueprint $table) {
            $table->foreignId('page_id')->unique()->constrained('pages')->onDelete('cascade');    
            $table->foreignId('menue_id')->nullable()->constrained('menus')->onDelete('cascade');            
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_menue');
    }
};
