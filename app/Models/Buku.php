<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table        = 'buku';
    protected $primaryKey   = 'id_buku';
    protected $fillable     = ['kategori_id', 'deskripsi', 'status', 'judul', 'penulis', 'cover'];
}
