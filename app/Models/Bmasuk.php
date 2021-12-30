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

    public function supplier()
    {
        // Data model "Model" bisa memiliki oleh model "Author"
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Supplier','id_supplier');
    }
}
