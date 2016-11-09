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

    public function scopePriceFrom($query,$from){
        if(!empty($from)){
            $query = $query->where('price','>',$from);
        }
        return $query;
    }

    public function scopePriceTo($query,$to){
        if(!empty($to)){
            $query = $query->where('price','<',$to);
        }
        return $query;
    }

    public function company(){
      return $this->hasOne('App\Models\MST_COMPANY','COMPANY_ID','COMPANY_ID');
    }


}
