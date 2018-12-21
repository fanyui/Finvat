<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client_id')->nullable(); //foreign key for linking to the client table

            // $table->string('iban_number');
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
        Schema::dropIfExists('accounts');
    }
}
