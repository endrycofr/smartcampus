<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    protected $connection = 'mysql'; // Nama koneksi yang sesuai dengan konfigurasi di database.php
    protected $table = 'mahasiswa'; // Nama tabel di database eksternal
    use HasFactory;
}
