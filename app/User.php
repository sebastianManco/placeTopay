<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'identification';
    public $incrementing = false;
}


