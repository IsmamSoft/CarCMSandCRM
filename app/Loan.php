<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
   
        public function users()
        {
            return $this->belongsTo(User::class);
        }
    
}
