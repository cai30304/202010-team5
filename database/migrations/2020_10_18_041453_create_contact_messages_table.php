<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name',70);
            $table->string('telephone_number',50)->default(0);
            $table->string('phone_number',50)->default("0");
            $table->string('email',255)->default("0");
            $table->integer('serverce_id')->default(0);
            $table->string('subject',100);
            $table->text('inner_text');
            $table->integer('inquire_id')->nullable(true);
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
        Schema::dropIfExists('contact_messages', function (Blueprint $table) {
            //
        });
    }
}
