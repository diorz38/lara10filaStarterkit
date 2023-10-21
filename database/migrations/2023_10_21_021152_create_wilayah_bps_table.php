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
        Schema::create('wilayah_bps', function (Blueprint $table) {
            $table->string('id', 10)->primary()->comment('DATA BPS');
            $table->string('parent_id', 10)->nullable()->comment('DATA BPS');
            $table->string('name', 100)->nullable()->comment('DATA BPS');
            $table->string('kode', 10)->comment('DATA BPS');
            $table->bigInteger('length')->comment('DATA BPS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wilayah_bps');
    }
};
