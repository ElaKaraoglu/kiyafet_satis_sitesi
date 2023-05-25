<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siparisler extends Model
{
    use HasFactory;
    protected $table = 'siparisler';
    public function detaylar()
    {
        return $this->hasMany('App\Models\siparisdetaylari','siparis_id');
    }
    public function user()
    {
       return $this->belongsTo(User::class,'kullanici_id','id');
    }
}
