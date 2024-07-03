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
        Schema::create('home_why_us', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title');
            $table->string('content')->nullable();
            $table->string('card_title_1');
            $table->string('card_icon_class_1');
            $table->string('card_title_2');
            $table->string('card_icon_class_2');
            $table->string('card_title_3');
            $table->string('card_icon_class_3');
            $table->string('card_title_4');
            $table->string('card_icon_class_4');
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
        Schema::dropIfExists('home_why_us');
    }
};