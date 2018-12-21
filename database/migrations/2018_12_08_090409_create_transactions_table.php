<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations. to create the transaction table
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('transaction_date')->nullable();
            $table->string('transaction_value')->nullable();
            $table->string('transaction_amount')->nullable();
            $table->string('transaction_balance')->nullable();
            $table->string('transactions_currency')->nullable();
            $table->string('transaction_entity')->nullable();
            $table->string('transaction_iban')->nullable();
            $table->string('transaction_office')->nullable();
            $table->string('transaction_description')->nullable();
            // $table->string('parent_category');
            // $table->string('child_category');
            // $table->string('bank_id'); //foriegn key  from bank
            // $table->string('account_id');//forign key from client
            // $table->string('client_id');//forign key from client

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
        Schema::dropIfExists('transactions');
    }
}
