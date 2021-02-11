<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [ 'firstname', 'lastname', 'age', 'address', 'gender','email' ];
}
