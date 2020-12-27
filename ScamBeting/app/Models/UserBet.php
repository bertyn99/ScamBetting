<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBet extends Model
{
    use HasFactory;
    protected $table = 'userbet';

    protected $fillable = [
        'user_id',
        'id_paris',
        'win',
        'isAdmin',
        'cote',
        'mise',
        'status',
    ];
}
