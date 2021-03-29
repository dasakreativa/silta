<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';
    protected $guard = 'siswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The function retrive relationship to BiodataSiswa.
     *
     * @var     null
     * @return  array
     */
    function biodata_siswa() {
        return $this->belongsTo('\App\Models\BiodataSiswa', 'nis', 'nis');
    }

    /**
     * The function retrive relationship to FotoProfil.
     *
     * @var     null
     * @return  array
     */
    function foto_profil() {
        return $this->belongsTo('\App\Models\FotoProfil', 'nis', 'nis');
    }
}
