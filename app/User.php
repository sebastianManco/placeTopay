<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'identification';
    public $incrementing = false;
    protected $fillable = [
        'name',
         'last_Name', 
         'email', 
         'phone', 
         'direction',
         'idenfication',
         'user_Name',
         'password',
         'confirm_Password'
        ];
    
}


