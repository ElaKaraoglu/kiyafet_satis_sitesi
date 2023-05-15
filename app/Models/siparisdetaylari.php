<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siparisdetaylari extends Model
{
    use HasFactory;
    protected $table = 'siparisdetaylari';
    public function geturun()
    {
        return $this->hasone('App\Models\urunler','id','urun_id');
    }
}
