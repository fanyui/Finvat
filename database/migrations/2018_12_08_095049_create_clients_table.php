<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string("_id");
            $table->string('number');
            $table->string('name');
            // $table->string('address');
            $table->json('address')->nullable();
            // $table->string('telephone1');
            // $table->string('telephone2')->nullable();
            // $table->string('telephone3')->nullable();
            $table->json("phone")->nullable();
            $table->date('birthDate'); //watch out for data type
            // $table->string('account1')->nullable();
            // $table->string('account2')->nullable();
            // $table->string('account3')->nullable();
            // $table->string('account4')->nullable();
            // $table->string('account5')->nullable();
            $table->json("account_obj")->nullable();
            $table->string('participation')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
