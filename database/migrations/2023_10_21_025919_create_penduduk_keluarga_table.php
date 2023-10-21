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
        Schema::create('penduduk_keluarga', function (Blueprint $table) {
            $table->string('nkk', 20)->primary();
            $table->string('nik_kepala', 20)->nullable()->index('FK_keluarga_penduduk');
            $table->string('tgl_daftar', 50)->nullable();
            $table->string('kelas_sosial', 191)->nullable();
            $table->string('tgl_cetak_kk', 50)->nullable();
            $table->string('alamat', 191)->nullable();
            $table->string('sls_id', 6)->index('FK_keluarga_sls');
            $table->integer('pindah')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
            $table->softDeletes();

            $table->unique(['nkk'], 'nkk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk_keluarga');
    }
};
