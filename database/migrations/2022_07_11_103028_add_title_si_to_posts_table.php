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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title_si')->nullable();
            $table->longText('body_si')->nullable();
            $table->string('title_ta')->nullable();
            $table->longText('body_ta')->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('title_si');
            $table->dropColumn('body_si');
            $table->dropColumn('title_ta');
            $table->dropColumn('body_ta');
            $table->dropColumn('start');
            $table->dropColumn('end');

        });
    }
};
