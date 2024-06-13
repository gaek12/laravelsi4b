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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->default('1');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->id();
             $table->char('npm',10);
             $table->string('nama',45);
             $table->string('tempat_lahir', 45);
             $table->date('tanggal_lahir');
             $table->string('alamat');
              $table->foreignId('prodi_id')->constrained(); // relasi ke kolom id pada tabel prodis
            //  $table->unsignedBigInteger('prodi_id');
            //  $table->foreign('prodi_id')->references('id')->on('prodi');
             
             $table->string('url_foto'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
