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
        Schema::create('folder_covers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('folder_id')->constrained()->cascadeOnDelete();
            $table->string('area');
            $table->string('asunto');
            $table->date('fecha_inicio');
            $table->date('fecha_terminacion');
            $table->string('valor_documental');
            $table->string('conservacion_tramite');
            $table->string('conservacion_concentracion');
            $table->string('conservacion_acceso')->nullable();
            $table->string('conservacion_desclasificacion')->nullable();
            $table->enum('clasificacion_informacion', ['confidencial', 'reservado'])->nullable();
            $table->string('expediente')->nullable();
            $table->string('localizacion')->nullable();
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
        Schema::dropIfExists('folder_covers');
    }
};
