<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserExtraInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_extra_infos', function (Blueprint $table) {
            $table->id();
            $table->text('img_url');
            $table->text('interet');
            $table->text('education');
            $table->text('skills');
            $table->text('summary');
            $table->text('address');
            $table->text('experience');
            $table->text('phone');
            $table->text('languages');
            $table->text('certifications');
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
        Schema::dropIfExists('user_extra_infos');
    }
}
