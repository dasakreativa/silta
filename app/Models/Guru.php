<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Guru extends Authenticable
{
    use Notifiable;

    protected $table = 'guru';
    protected $guard = 'guru';

    protected $fillable = [
        'email', 'username', 'password', 'email_verfied_at'
    ];

    protected $hidden = ['password'];
}