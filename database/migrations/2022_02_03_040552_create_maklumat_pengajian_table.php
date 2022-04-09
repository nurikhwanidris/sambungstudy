<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaklumatPengajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maklumat_pengajians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('bidangPengajian')->nullable();
            $table->string('peringkatPengajian')->nullable();
            $table->string('kaedahPengajian')->nullable();
            $table->string('modPengajian')->nullable();
            $table->string('namaInstitusi')->nullable();
            $table->string('tempatPengajian')->nullable();
            $table->string('tempohPengajianTahun')->nullable();
            $table->string('tempohPengajianBulan')->nullable();
            $table->date('MulaPengajian')->nullable();
            $table->date('TamatPengajian')->nullable();
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
        Schema::dropIfExists('maklumat_pengajians');
    }
}
