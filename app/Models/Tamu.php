<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tamu extends Model
{
    protected $connection = 'second_db'; // Nama koneksi yang sesuai dengan konfigurasi di database.php
    protected $table = 'tamu'; // Nama tabel di database eksternal
    use HasFactory;
}
