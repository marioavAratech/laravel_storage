<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('direccion')->default('Calle Default 8');
            $table->string('ciudad')->default('Madrid');
            $table->string('pais')->default('España');
            $table->string('telefono',15)->default('12345678912');
            $table->string('codigoPostal',10)->default('12345');
            $table->date('nacimiento')->useCurrent();
            $table->string('genero')->default('masculino');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};