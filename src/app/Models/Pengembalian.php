<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';
    protected $fillable = ['total', 'tgl', 'pelanggan_id', 'pembayaran_id', 'kode_bkg', 'pegawai_id'];
    protected $primaryKey = 'pembayaran_id';
}
