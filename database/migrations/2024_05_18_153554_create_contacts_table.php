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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('location_title')->nullable();
            $table->longText('location_content')->nullable();
            $table->string('address1_country');
            $table->string('address1_phone');
            $table->string('address1_email');
            $table->text('address1_location');
            $table->text('address1_image');
            $table->string('address2_country')->nullable();
            $table->string('address2_phone')->nullable();
            $table->string('address2_email')->nullable();
            $table->text('address2_location')->nullable();
            $table->text('address2_image')->nullable();
            $table->string('address3_country')->nullable();
            $table->string('address3_phone')->nullable();
            $table->string('address3_email')->nullable();
            $table->text('address3_location')->nullable();
            $table->text('address3_image')->nullable();
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
        Schema::dropIfExists('contacts');
    }
};
