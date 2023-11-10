<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buddy_user extends Model
{
    use HasFactory;
    Protected $casts = [
        'full_name' => 'string',
        'email' => 'string',
        'pword' => 'string',
    ];
    protected $fillable = [
        'reg_full_name',
        'reg_email',
        'password'
    ];
}
