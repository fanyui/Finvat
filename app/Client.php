<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $casts = [
            'address' => 'array',
            'phone' => 'array',
            'account_obj' => 'array',
        ];



		public function transaction(){
			return $this->hasMany(\App\Transaction::class,'client_id');
		}  

		public function account(){
			return $this->hasMany(\App\Account::class,'client_id');
		}  


		public function bank(){
			return $this->hasMany(\App\Bank::class,'client_id');
		} 
}
