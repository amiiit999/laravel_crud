<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateC5modelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c5models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
             $table->string('user_email');
              $table->string('user_password');
               $table->string('user_image');
                $table->string('user_city');
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
        Schema::dropIfExists('c5models');
    }
}
