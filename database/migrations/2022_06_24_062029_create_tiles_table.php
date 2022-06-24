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
        Schema::create('tiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en', 100);
            $table->string('name_si', 100)->nullable();
            $table->string('name_ta', 100)->nullable();
            $table->string('description_en', 250);
            $table->string('description_si', 250)->nullable();
            $table->string('description_ta', 250)->nullable();
            $table->string('background_image')->nullable();
            $table->enum('status', array('ACTIVE','INACTIVE'))->default('ACTIVE');
            $table->string('order', 10)->nullable();
            $table->foreignId('page_id')->nullable()->constrained('pages')->onDelete('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiles');
    }
};
