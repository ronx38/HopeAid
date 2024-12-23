<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisDonasi extends Model
{
    protected $fillable = ['item_donasi'];
    protected $guarded = ['created_at', 'updated_at'];
    public function form(){
        return $this->hasOne(Form::class);
    }

    public function uang(){
        return $this->hasOne(Uang::class);
    }

    public function barang() {
        return $this->hasOne(Barang::class);
    }
}
