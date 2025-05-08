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
        Schema::create('books', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('nama_buku');
            $table->integer('harga');
            $table->integer('stok');
            $table->text('deskripsi');
            $table->unsignedBigInteger('id_penulis');
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_genre');
            $table->string('foto');

            //relasi
            $table->foreign('id_penulis')->references('id')->on('penulis')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade');
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
};
