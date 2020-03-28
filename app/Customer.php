<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guard = ['id'];
    protected $table = 'customers';
    protected $fillabe = [
    	'email', 'password'
    ];
}
