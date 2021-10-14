<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsCTContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_c_t_contents', function (Blueprint $table) {
            $table->id();
            $table->string('judul_content')->nullable();
            $table->string('image_tumbail')->nullable();
            $table->string('isi_content')->nullable();
            $table->integer('id_creator');
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
        Schema::dropIfExists('ms_c_t_contents');
    }
}
