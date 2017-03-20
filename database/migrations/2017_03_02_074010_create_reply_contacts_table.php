<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->integer('id_contact')->unsigned();
            $table->foreign('id_contact')->references('id')->on('contacts')->onDelete('cascade');
            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::dropIfExists('reply_contacts');
    }
}
