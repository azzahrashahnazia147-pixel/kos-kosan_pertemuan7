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
            $table->id();
            $table->text('alamat');
            $table->decimal('luas_kamar', 5, 2);
            $table->enum('jenis_kamar', ['campuran' , 'laki-laki' , 'perempuan']);
            $table->boolean('is_full');
            $table->integer('harga');
            $table->timestamps();
    }

    public function down(): void
    {
        Schema::dropIfExists('bangunans');
    }
};