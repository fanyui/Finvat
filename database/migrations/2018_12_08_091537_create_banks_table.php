<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->json("banks")->nullable();

            // $table->string('iban1_number');
            // $table->string('iban2_number');
            // $table->string('iban3_number');
            // $table->string('iban4_number');
            // $table->string('iban5_number');
            $table->string('last_updated')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            // $table->string('entity');
            $table->string('current_balance');
            $table->string('currency');
            // $table->string('label_account');
            $table->date('creation_date')->nullable();
            $table->string('first_movement')->nullable();
            $table->string('last_movement')->nullable();
            $table->json('by_month');
            $table->json('total');





            $table->integer('account_id')->nullable(); //foreign key from account table
            $table->integer('client_id')->nullable();  //foreign key from clients table 

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
        Schema::dropIfExists('banks');
    }
}
