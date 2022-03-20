<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = ['first_name', 'last_name', 'email', 'sector_id', 'phone', 'city',
                            'reg_cert', 'com_cert', 'password'
                            ];
    
    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

    
    public function sector(){
        return $this->belongsTo(\App\Sector, 'sector_id', 'id');
    }
}
