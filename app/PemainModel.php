<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemainModel extends Model
{
    protected $table = 'pemain';
    protected $fillable = ['nama','jenis_kelamin','asal_klub'];
}
