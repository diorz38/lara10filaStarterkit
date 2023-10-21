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
        Schema::create('penduduk_detil', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('nkk', 16)->nullable()->index('nkk');
            $table->string('agama_id',1)->nullable()->comment('inti');
            $table->string('ijasah_id',1)->nullable()->comment('inti (ijasah tertinggi)');
            $table->string('pendidikan_sedang_id',1)->nullable()->comment('tambahan');
            $table->string('pekerjaan_id',1)->nullable()->comment('inti');
            $table->string('dokumen_pasport', 45)->nullable()->comment('tambahan');
            $table->string('dokumen_kitas', 50)->nullable()->comment('tambahan');
            $table->string('ayah_nik', 16)->nullable()->comment('silsilah');
            $table->string('ibu_nik', 16)->nullable()->comment('silsilah');
            $table->string('nama_ayah', 100)->nullable()->comment('silsilah');
            $table->string('nama_ibu', 100)->nullable()->comment('silsilah');
            $table->string('foto', 100)->nullable()->comment('inti');
            $table->integer('golongan_darah_id')->nullable()->comment('inti');
            $table->string('sls_id', 6)->comment('tambahan');
            $table->string('etnis_id', 5)->nullable();
            $table->string('alamat_sebelumnya', 200)->nullable()->comment('tambahan');
            $table->string('alamat_sekarang', 200)->nullable()->comment('tambahan');
            $table->integer('hamil')->nullable()->comment('kesehatan');
            $table->integer('cacat_id')->nullable()->comment('kesehatan');
            $table->integer('sakit_menahun_id')->nullable()->comment('kesehatan');
            $table->string('akta_lahir', 40)->nullable()->comment('kesehatan');
            $table->string('akta_kawin', 40)->nullable()->comment('perkawinan');
            $table->date('tgl_kawin')->nullable()->comment('perkawinan');
            $table->string('akta_cerai', 40)->nullable()->comment('perkawinan');
            $table->date('tgl_cerai')->nullable()->comment('perkawinan');
            $table->tinyInteger('cara_kb_id')->nullable()->comment('kesehatan');
            $table->string('telepon', 20)->nullable()->comment('tambahan');
            $table->date('tanggal_akhir_paspor')->nullable()->comment('tambahan');
            $table->string('no_kk_sebelumnya', 30)->nullable()->comment('tambahan');
            $table->tinyInteger('ktp_el')->nullable()->comment('ktp');
            $table->tinyInteger('status_rekam')->nullable()->comment('ktp');
            $table->string('waktu_lahir', 5)->nullable()->comment('kesehatan');
            $table->tinyInteger('tempat_dilahirkan')->nullable()->comment('kesehatan');
            $table->tinyInteger('jenis_kelahiran')->nullable()->comment('kesehatan');
            $table->tinyInteger('kelahiran_anak_ke')->nullable()->comment('kesehatan');
            $table->tinyInteger('penolong_kelahiran')->nullable()->comment('kesehatan');
            $table->smallInteger('berat_lahir')->nullable()->comment('kesehatan');
            $table->string('panjang_lahir', 10)->nullable()->comment('kesehatan');
            $table->tinyInteger('id_asuransi')->nullable();
            $table->char('no_asuransi', 100)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('tag_id_card', 15)->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk_detil');
    }
};
