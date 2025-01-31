<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dni')->unique();
            $table->string('name');
            $table->string('surname');
            $table->date('birth_date');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->text('more_info')->nullable();
            $table->text('life_style');
            $table->text('background_health');
            $table->text('background_aesthetic');
            $table->text('asthetic_routine');
            $table->text('hairdressing_routine');
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
        Schema::dropIfExists('clients');
    }
}
