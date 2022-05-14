<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanType extends Model
{
  use SoftDeletes;
  
    //
    public function loans()
    {
        return $this->hasMany('App\Models\Loans\Loan');
    }
}
