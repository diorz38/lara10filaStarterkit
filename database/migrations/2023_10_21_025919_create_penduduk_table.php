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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('nkk', 16)->index('nkk');
            $table->string('nama', 191);
            $table->integer('jkel_id')->nullable();
            $table->string('tempat_lahir', 191)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->integer('status_kawin_id')->nullable();
            $table->integer('agama_id')->nullable();
            $table->string('ijasah_id', 2)->nullable();
            $table->string('pekerjaan_id', 2)->nullable();
            $table->string('gol_darah_id', 2)->nullable();
            $table->string('hub_id', 2)->nullable();
            $table->string('alamat_ktp', 191)->nullable();
            $table->string('status_warga_id', 1)->nullable();
            $table->string('warganegara_id', 1)->nullable();
            $table->string('sls_id', 6)->nullable()->index('sls_id');
            $table->boolean('is_present')->unsigned()->default(true);
            $table->string('created_by', 16)->nullable();
            $table->string('updated_by', 16)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
            $table->softDeletes();

            $table->unique(['nik'], 'nik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
};
