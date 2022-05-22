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
        Schema::create('folder_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subdepartment_id')->constrained();
            $table->string('serie');
            $table->enum('estatus', ['prestado', 'disponible']);
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
        Schema::dropIfExists('folder_groups');
    }
};
