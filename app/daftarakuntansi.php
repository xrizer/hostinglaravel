<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftarakuntansi extends Model
{
    protected $table = 'daftarakun';
    protected $fillable = ['kode_kambing','harga','bobot_badan','gambar'];
}
