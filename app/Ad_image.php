<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad_image extends Model
{
    protected $fillable = ['ad_id', 'image'];

    public function ad(){
        return $this->belongsTo(\App\Ad);
    }
}
