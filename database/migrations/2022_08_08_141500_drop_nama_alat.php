<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropNamaAlat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sewa_alat', function (Blueprint $table) {
            $table->dropColumn(['nama_alat', 'penyewaan_id']);
        });

        Schema::table('sewa_alat', function (Blueprint $table) {
            $table->integer('penyewaan_id')->after('id');
            $table->integer('id_alat')->after('penyewaan_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
