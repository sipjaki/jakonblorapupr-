<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class asosiasimasjaki extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function skktenagakerjabloralist()
    {
        return $this->hasMany(skktenagakerjabloralist::class, 'asosiasimasjaki_id');
    }

    public function skktenagakerjablora()
    {
        return $this->hasMany(skktenagakerjablora::class, 'asosiasimasjaki_id');
    }

    public function bujkkontraktor()
    {
        return $this->hasMany(bujkkontraktor::class, 'asosiasimasjaki_id');
    }

    public function bujkkonsultan()
    {
        return $this->hasMany(bujkkonsultan::class, 'asosiasimasjaki_id');
    }

}
