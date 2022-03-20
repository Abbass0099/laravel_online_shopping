<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
                            'seller_id', 'title', 'expire_date', 
                            'price', 'discount', 'currency', 'condition', 
                            'desc', 'sector_id', 'city', 'country', 'state',
                            'street', 'phone'
                            ];
    
    public function images(){
        return $this->hasMany(\App\Ad_image);
    }
}
