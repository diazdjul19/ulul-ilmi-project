<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsCtCreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_ct_creators', function (Blueprint $table) {
            $table->id();
            $table->string('name_creator');
            $table->string('login_email');
            $table->string('login_password');
            $table->string('status');
            $table->string('social_link_facebook')->nullable();
            $table->string('social_link_instagram')->nullable();
            $table->string('social_link_youtube')->nullable();
            $table->string('about_description')->nullable();
            $table->string('about_location')->nullable();
            $table->string('about_notes')->nullable();
            $table->string('foto_creator')->nullable();
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
        Schema::dropIfExists('ms_ct_creators');
    }
}
