<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $visible = ['id','nama_barang','kateori_barang','jumlah'];

    protected $fillable = ['id','nama_barang','kateori_barang','jumlah'];


    public $timestamps = true;
}
