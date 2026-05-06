<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model ini.
     * Secara default Laravel akan menganggap tabelnya bernama 'bangunans',
     * jadi baris ini bersifat opsional jika nama tabel sudah sesuai.
     */
    protected $table = 'bangunans';

    /**
     * Kolom-kolom yang dapat diisi secara massal (Mass Assignment).
     * Pastikan semua kolom di migration masuk ke sini agar bisa disimpan lewat form.
     */
    protected $fillable = [
        'alamat',
        'luas_kamar',
        'jenis_kamar',
        'is_full',
        'harga',
    ];

    /**
     * Casting tipe data.
     * Ini berguna agar Laravel otomatis mengubah tipe data saat diakses.
     */
    protected $casts = [
        'is_full' => 'boolean', // Kolom ini akan selalu dibaca sebagai true/false
        'luas_kamar' => 'float',
        'harga' => 'integer',
    ];
}