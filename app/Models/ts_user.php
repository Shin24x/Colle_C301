<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ts_user extends Model
{
    use HasFactory;
    Protected $casts = [
        'full_name' => 'string',
        'email' => 'string',
        'uname' => 'string',
        'pword' => 'string',
    ];
    protected $fillable = [
        'reg_full_name',
        'reg_email',
        'reg_uname',
        'password'
    ];
    public $timestamps = false;
}
