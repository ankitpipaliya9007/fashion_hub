<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users234 extends Model
{
    use HasFactory;
    protected $table = 'users234';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'username',
        'phoneno',
        'email',
        'password',
    ];

}
