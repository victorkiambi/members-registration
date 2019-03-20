<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigInteger('contact');
            $table->primary('contact');	
            $table->string('names');
            $table->bigInteger('id');
            $table->string('email');
            $table->date('dob');
            $table->string('district');
            $table->string('guardian');
            $table->string('guardian_contact');
            // $table->binary('photo');
            $table->string('full_member');
            $table->string('admitted');
            $table->string('commissioned');

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
        Schema::dropIfExists('members');
    }
}
