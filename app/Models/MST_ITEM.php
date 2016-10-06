<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MST_ITEM extends Model
{
    protected $table = 'MST_ITEM';

    public function scopeCompanyID($query,$company_id){
      if(!empty($company_id)){
        $query = $query->orWhere('COMPANY_ID',$company_id);
      }
      return $query;
    }

    public function company(){
      return $this->hasOne('App\Models\MST_COMPANY','COMPANY_ID','COMPANY_ID');
    }


}
