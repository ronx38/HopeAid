<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['jenis_donasi_id', 'user_id', 'tipe_barang', 'No_Resi'];
    protected $guarded = ['created_at', 'updated_at'];
    public function jenisdonasi(){
        return $this->belongsTo(JenisDonasi::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
