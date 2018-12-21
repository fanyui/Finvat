<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

	    protected $casts = [
            'by_month' => 'array',
            'total' => 'array',
        ];


		public function transaction(){
			return $this->hasMany(\App\Transaction::class, 'account_id');
		}  
}
