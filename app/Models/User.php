<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function statusadmin()
    {
        return $this->belongsTo(statusadmin::class);
    }

    public function berita()
    {
        return $this->hasMany(beritajakon::class);
    }

    public function pesertapelatihan()
    {
        return $this->hasMany(pesertapelatihan::class);
    }

    public function allskktenagakerjablora()
    {
        return $this->hasMany(allskktenagakerjablora::class);
    }

    public function beritajakon()
    {
        return $this->hasMany(beritajakon::class);
    }

    public function artikeljakonmasjaki()
    {
        return $this->hasMany(artikeljakonmasjaki::class);
    }

    public function agendapelatihan()
    {
        return $this->hasMany(agendapelatihan::class);
    }

}
