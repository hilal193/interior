<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("nomAdresse");
            $table->string("rueAdresse");
            $table->string("numero");
            $table->string("dispo");
            $table->string("logoAdresse");
            $table->string("logoPhone");
            $table->string("logoMail");
            $table->string("email",60)->nullable();
            $table->string("emailDescrip");
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
        Schema::dropIfExists('contacts');
    }
}
