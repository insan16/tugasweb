<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatTagihan extends Model
{
    protected $table = 'riwayat_tagihan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama' ,'nomer_telepon', 'alamat' , 'jumlah_tagihan' ,'jenis_tagihan','tanggal_tagihan',
    ];
    use HasFactory;
}
