<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitTatatertibsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidp
     */
    public function up()
    {
        Schema::create('unit_tatatertibs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permohonan_id')->constrained('permohonans');
            $table->tinyInteger('pengulas_id');
            $table->string('tindakan');
            $table->string('jenisTindakan')->nullable();
            $table->text('ulasan')->nullable();
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
        Schema::dropIfExists('unit_tatatertibs');
    }
}
