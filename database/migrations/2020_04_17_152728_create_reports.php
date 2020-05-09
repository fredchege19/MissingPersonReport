<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullName');
            $table->string('age');
            $table->string('address');
            $table->string('homeNumber');
            $table->string('mobile');
            $table->string('clothing');
            $table->string('lastSeen');
            $table->string('stepsTaken');
            $table->string('relationship');
            $table->string('yourNumber');
            $table->string('image');
            $table->string('userId');
            $table->string('description');
            $table->string('status');
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
        Schema::dropIfExists('reports');
    }
}
