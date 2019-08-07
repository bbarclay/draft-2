<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacebookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebook', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facebook_name');
            $table->string('facebook_user_count');
            $table->string('facebook_image');
            $table->string('facebook_username');
            $table->string('facebook_other_field');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            ___SOFT_DELETES_BLOCK___
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facebook');
    }
}