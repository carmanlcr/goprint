<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->unique('email');
            $table->string('username');
            $table->unique('username')->nullable();
            $table->string('password')->nullable();
            $table->string('imagen')->nullable();
            $table->boolean('activo')->default(false);
            $table->boolean('social')->default(false);
            $table->integer('dato_usuarios_id')->unsigned();
            $table->foreign('dato_usuarios_id')
                  ->references('id')
                  ->on('dato_usuarios')
                  ->onDelete('cascade');
            $table->integer('tipo_usuarios_id')->unsigned()->default(1);
            $table->foreign('tipo_usuarios_id')
                  ->references('id')
                  ->on('tipo_usuarios')
                  ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
