<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsCtHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_ct_homes', function (Blueprint $table) {
            $table->id();
            $table->string('ct_home_name');
            $table->string('ct_home_uc');
            $table->string('ct_home_category');
            $table->longText('ct_home_text_content')->nullable();
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
        Schema::dropIfExists('ms_ct_homes');
    }
}
