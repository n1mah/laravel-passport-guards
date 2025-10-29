<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Student extends Authenticatable
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'gender',
        'field_study',
        'email',
        'password',
        'inter',
    ];

}
