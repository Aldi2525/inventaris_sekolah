<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bmasuk extends Model
{
    use HasFactory;
    protected $visible = ['id','nama_barang','tgl_msk','jumlah_msk'];

    protected $fillable = ['id','nama_barang','tgl_msk','jumlah_msk'];

    public $timestamps = true;

    public function bmasuks()
    {

        return $this->belongsTo('App\Models\supplier','id_supplier');
    }
}
