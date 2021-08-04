<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id', 'ename', 'cname', 'contact', 'username', 'password' 
    ];
}
