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
        Schema::create('sls', function (Blueprint $table) {
            $table->string('id', 6)->primary();
            $table->string('rw', 3);
            $table->string('rt', 3);
            $table->string('dusun', 191);
            $table->integer('hak_pilih_2019')->nullable();
            $table->double('luas_ha')->nullable();
            $table->double('luas_m2')->nullable();
            $table->unsignedInteger('topografi')->default(3)->comment('DATARAN');
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
        Schema::dropIfExists('sls');
    }
};
