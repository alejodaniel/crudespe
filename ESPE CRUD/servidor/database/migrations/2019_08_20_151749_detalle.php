<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->double('price', 2);
            $table->integer('cantidad');
            $table->integer('factura_id')->unsigned()->index();
            $table->foreign('factura_id')->references('id')->on('factura')->onDelete('cascade');
            $table->integer('producto_id')->unsigned()->index();
            $table->foreign('producto_id')->references('id')->on('producto')->onDelete('cascade');
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
