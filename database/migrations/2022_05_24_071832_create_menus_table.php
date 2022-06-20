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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name_lang', 100)->nullable();
            $table->string('name_en', 100);
            $table->string('name_si', 100)->nullable();
            $table->string('name_ta', 100)->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('menus');
            $table->string('route', 50)->nullable();
            $table->string('policy', 50)->nullable();
            $table->string('icon', 50)->nullable();
            $table->string('model', 50)->nullable();
            $table->string('active', 50)->nullable();
            $table->string('order', 10)->nullable();
            $table->enum('status', array('SHOW','HIDE'))->default('SHOW');
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
        Schema::dropIfExists('menus');
    }
};
