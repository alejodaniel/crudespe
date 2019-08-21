<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('cedula', 10);
            $table->string('telefono', 10);
            $table->string('direccion', 50);
            $table->string('email', 50)->unique();
            $table->string('password', 10);
            $table->integer('rol_id')->unsigned()->index();
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
