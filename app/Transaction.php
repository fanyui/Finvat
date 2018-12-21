<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // relationship with the client account
    public function client($value='')
    {
	    return  $this->belongsTo(\App\Client::class);
    }

    //relationship with the account account
    public function account()
    {
	    return  $this->belongsTo(\App\Account::class);
    }


	//relationship with back account
    public function bank()
    {
	    return  $this->belongsTo(\App\Bank::class);
    }



}
