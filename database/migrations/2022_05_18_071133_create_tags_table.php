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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->text('description')->nullable();    
            $table->timestamps();
        });

        Schema::create('tag_post', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');            
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade');      
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('tag_post');
    }
};
