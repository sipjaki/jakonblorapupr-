<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class agendapelatihan extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];


    public function kategoripelatihan()
    {
        return $this->belongsTo(kategoripelatihan::class);
    }

    public function pesertapelatihan()
    {
        return $this->belongsTo(pesertapelatihan::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }


}
