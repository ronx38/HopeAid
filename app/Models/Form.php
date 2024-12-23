<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Form extends Model
{
    // protected $fillable = ['user_id', 'donasi_id', 'name', 'email', 'no_telp', 'nominal', 'photo', 'tipe_barang'];
    protected $fillable = ['user_id', 'donasi_id', 'name', 'email', 'no_telp'];
    protected $guarded = ['created_at', 'updated_at'];
    public function donasi(){
        return $this->belongsTo(Donasi::class);
    }

    public function jenisdonasi(){
        return $this->belongsTo(JenisDonasi::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
