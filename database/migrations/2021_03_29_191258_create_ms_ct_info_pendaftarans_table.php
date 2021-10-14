<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsCtInfoPendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_ct_info_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('name_section');
            $table->string('md5_uc');
            $table->string('status');
            $table->longText('content_section')->nullable();
            $table->string('file_information')->nullable();
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
        Schema::dropIfExists('ms_ct_info_pendaftarans');
    }
}
