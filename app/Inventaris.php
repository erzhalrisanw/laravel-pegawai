<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventaris';

    protected $fillable = ['id','nama_barang'.'jumlah_barang'.'kode_barang'];
}
