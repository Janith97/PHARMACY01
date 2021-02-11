<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function passport(){
        return $this->hasOne('App\Passport');
    }
    public function invoices(){
        return $this->hasMany('App\Invoice');
    }
   
}
