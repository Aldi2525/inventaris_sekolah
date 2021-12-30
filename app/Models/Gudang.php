<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;
    protected $visible = ['id','nama_barang','kateori_barang','jumlah_stok'];

    protected $fillable = ['id','nama_barang','kateori_barang','jumlah_stok'];


    public $timestamps = true;
}
