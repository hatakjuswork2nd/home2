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
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->text('company', 40);
            $table->string('name', 20);
            $table->string('call', 20);
            $table->string('email', 255);
            $table->integer('year', 4);
            $table->integer('month', 2);
            $table->integer('day', 2);
            $table->string('genders');
            $table->string('job', 255);
            $table->string('pref_id', 255);
            $table->text('body');
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
        Schema::dropIfExists('contact_forms');
    }
};
