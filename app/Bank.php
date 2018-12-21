<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

		    protected $casts = [
		    'banks'	=> 'array',
            'by_month' => 'array',
            'total' => 'array',
        ];
	//relationships

		// transaction relationship
    	public function transaction(){
			return $this->hasMany(\App\Transaction::class, 'bank_id');
		}  
}
