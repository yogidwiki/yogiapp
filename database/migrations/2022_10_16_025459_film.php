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
       Schema::create('film', function (Blueprint $table){
        $table->id();
        $table->string('judul');
        $table->text('sinopsis');
        $table->integer('tahun');
        $table->double('rating',2,1);
        $table->text('img_url');
        $table->timestamps();
       }); //
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
};
