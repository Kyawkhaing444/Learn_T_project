<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['id','name','password','phone_number','email','address',
'specification' , 'isAdmin' ,'coin','photoURL','student_no'];
}
