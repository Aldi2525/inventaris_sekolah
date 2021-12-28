<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $visible = ['id','nama_supplier','alamat','no_wa'];

    protected $fillable = ['id','nama_supplier','alamat','no_wa'];

    public $timestamps = true;
}
