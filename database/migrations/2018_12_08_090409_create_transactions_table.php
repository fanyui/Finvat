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

            /* Critical section these filed here below can be resource consuming so there is a relationship to the category table where you can get these
            but they are still field here to maximize runtime and querry time()
                $table->string('parent_category');
                $table->string('child_category');
                    $table->string('category');
                    $table->string('sub_category');
            */

                $table->string('parent_category')->nullable();
                $table->string('child_category')->nullable();
            $table->integer('category_id')->nullable(); //foriegn key  from category table
            //End of critical section
            $table->json('concepts')->nullable();
            $table->integer('bank_id')->nullable(); //foriegn key  from bank
            $table->string('account')->nullable(); //foriegn key  from bank
            // $table->string('account_id');//forign key from account
            // $table->integer('client_id');//forign key from client
            $table->integer('user_id');


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
