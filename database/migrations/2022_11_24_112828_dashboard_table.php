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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('tgllhr');
            $table->string('agama');
            $table->string('alamat');
            $table->string('pnddkn');
            $table->string('kampus');
            $table->string('prodi');
            $table->string('ktp');
            $table->string('ijazah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropColumn('tgllhr');
            $table->dropColumn('agama');
            $table->dropColumn('alamat');
            $table->dropColumn('pnddkn');
            $table->dropColumn('kampus');
            $table->dropColumn('prodi');
            $table->dropColumn('ktp');
            $table->dropColumn('ijazah');
        });
    }
};
