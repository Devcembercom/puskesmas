<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diare extends Model
{
    protected $table = 'diares';
    protected $fillable = [
        'nama_nagari','nama_jorong','bulan','tanggal','l','p','tanggal_sakit','tanpa_dehidrasi'
        ,'oralit','zinc','a','b','c','keterangan'
    ];
}
