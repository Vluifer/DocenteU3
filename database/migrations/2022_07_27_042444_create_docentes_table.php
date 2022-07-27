<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->integer('id',true);
            $table->integer('id_usuario')->index('FK_USUARIO');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('email',100)->unique();
            $table->string('telefono',10);
            $table->string('block',100);
            $table->string('profesional',10);
            $table->string('escalaron',10);
            $table->string('idioma',10);
            $table->string('anios_experiencia',10);
            $table->string('area_trabajo',25);
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
        Schema::dropIfExists('docentes');
    }
}
