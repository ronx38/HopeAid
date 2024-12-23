<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $fillable = ['judul_donasi', 'deskripsi', 'target', 'collected', 'donasi_photo'];
    protected $guarded = ['created_at', 'updated_at'];
    
    public function form(){
        return $this->hasOne(Form::class);
    }
}
