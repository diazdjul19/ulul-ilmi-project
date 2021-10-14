<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsCtPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_ct_pendidikans', function (Blueprint $table) {
            $table->id();
            $table->string('ct_pdd_name');
            $table->string('ct_pdd_uc');
            $table->string('ct_pdd_jp');
            $table->string('ct_pdd_category');
            $table->longText('ct_pdd_text_content')->nullable();
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
        Schema::dropIfExists('ms_ct_pendidikans');
    }
}
