<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("type")->nullable();
            $table->integer("bank_id")->nullable();

            $table->string("account")->nullable();
            $table->string("bank_name")->nullable();
            $table->string("name")->nullable();
            $table->date("creation_date")->nullable();
            $table->date("expiration_date")->nullable();
            $table->date("currency")->nullable();
            $table->integer("outstanding_capital")->nullable();
            $table->integer("initial_capital")->nullable();
            $table->integer("interest")->nullable();
            $table->integer("period")->nullable();
            $table->integer("pending_grace_periods")->nullable();
            $table->integer("pending_amortization_periods")->nullable();
            $table->date("next_receipt")->nullable();
            $table->integer("next_receipt_amount")->nullable();
            $table->string("last_update")->nullable();
            $table->json("customers")->nullable();
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
        Schema::dropIfExists('loans');
    }
}
