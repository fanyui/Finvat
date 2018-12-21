<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
       protected $casts = [
            'customers' => 'array',
        ];
}
