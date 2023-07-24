<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk_model extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id_produk';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_produk', 'harga_produk', 'desk', 'spek', 'gambar'];
}
