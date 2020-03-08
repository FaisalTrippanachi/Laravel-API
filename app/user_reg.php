<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_reg extends Model
{
    protected $table = 'user_regs';
    protected $fillable = ['f_name','l_name','dob','gender','username','password',];
}
