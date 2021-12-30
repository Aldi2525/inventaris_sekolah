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

    //membuat relasi one to many
    public function bmasuks()
    {
        // data model "Author" bisa memiliki banyak data
        //dari model "Book" melalui fk "author_id"
        $this->hasMany('App\Models\Bmasuk','id_supplier');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function($supplier){
            //mengecek apakah supplier masih punya barang masuk
            if ($supplier->bmasuks->count() > 0){
                //menyiapkan pesan error
                $pesan = 'Supplier tidak bisa dihapus karena masih memiliki hubungan dengan yang lain :';
                $pesan .= '<ul>';
                    foreach ($supplier->bmasuks as $bmasuk) {
                        $pesan .= "<li>$bmasuk->nama_barang</li>";
                    }
                    $pesan .= '</ul>';
                Session::flash("flash_notification", [
                    "level"=>"denger",
                    "message"=>$pesan
                ]);
                //membatalkan proses penghapusan
                return false;
            }
        });
    }
}
