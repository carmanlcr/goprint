<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('slug',255);
            $table->text('descripcion')->nullable();
            $table->decimal('precio',16,2);
            $table->integer('stock')->unsigned();
            $table->string('imagen');
            $table->string('size');
            $table->boolean('activo')->default(true);
            $table->timestamps();//Esto es para crear los created_at y updated_at
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
