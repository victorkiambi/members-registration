<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMizizisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mizizi', function (Blueprint $table) {
            $table->bigInteger('contacts');
            $table->primary('contacts');	

            $table->boolean('reg_status');
            $table->integer('amount');	
            $table->integer('balance');	
            $table->timestamps();

            $table->foreign('contacts')->references('contact')->on('members');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mizizi');
    }
}
