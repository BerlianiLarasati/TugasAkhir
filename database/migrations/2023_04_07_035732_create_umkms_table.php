<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('umkm_produk');
            $table->string('umkm_kategori', 255);
            $table->string('umkm_toko', 255);
            $table->string('umkm_alamat', 255)->nullable();
            $table->string('umkm_kontak', 255);
            $table->string('umkm_onlineshop', 255);
            $table->string('umkm_cover', 255);
            $table->text('umkm_deskripsi');
            // $table->unsignedBigInteger('area_id');
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
        Schema::dropIfExists('umkms');
    }
}
