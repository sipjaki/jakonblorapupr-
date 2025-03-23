<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jenjangpendidikan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function skktenagakerjablora()
    {
        return $this->hasMany(skktenagakerjablora::class);
    }

    public function skktenagakerjabloralist()
    {
        return $this->hasMany(skktenagakerjabloralist::class);
    }

    public function allskktenagakerjablora()
    {
        return $this->hasMany(allskktenagakerjablora::class);
    }

    public function agendapelatihan()
    {
        return $this->hasMany(agendapelatihan::class);
    }

    public function pesertapelatihan()
    {
        return $this->hasMany(pesertapelatihan::class);
    }



}
