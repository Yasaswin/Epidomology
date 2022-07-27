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
        Schema::create('notice_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('notice_id')->nullable()->constrained('notices')->onDelete('cascade');  
            $table->string('label_en', 100);
            $table->string('label_si', 100)->nullable();
            $table->string('label_ta', 100)->nullable();
            $table->string('value', 100)->nullable();
            $table->string('label_id', 20)->nullable();
            $table->enum('status', array('SHOW','HIDE'))->default('SHOW');
            $table->unique(['notice_id','label_id']);
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
        Schema::dropIfExists('notice_details');
    }
};
