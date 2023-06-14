<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        public function up(): void
    {
        Schema::create('sell', function (Blueprint $table) {
            
            $table->id();
            $table->string('Cantidad');
            $table->string('precio');
            $table->unsignedBigInteger('productoId');
            $table->foreign('productoId')->references('productoId')->on('inventario')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sell');
    }



};

