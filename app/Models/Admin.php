<?php

namespace App;
use Illuminate\Dataabase\Eloquent\Model;

class Pegawai Extends Model
{
    protected $table = "pegawai";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nama', 'alamat', 'tgllah', 'r'
    ];
}