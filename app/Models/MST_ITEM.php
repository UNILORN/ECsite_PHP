<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MST_ITEM extends Model
{
    protected $table = 'MST_ITEM';

    public function company(){
      return $this->hasOne('App\Models\MST_COMPANY','COMPANY_ID','COMPANY_ID');
    }
}
