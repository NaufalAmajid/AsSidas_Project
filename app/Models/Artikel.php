<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = "artikel";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'judul_artikel', 'isi_artikel', 'gambar_artikel' ];
    use HasFactory;
}
