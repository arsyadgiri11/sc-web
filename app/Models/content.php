<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    public $table = "content";

    protected $fillable = [
        'judul', 'deskripsi', 'gambar'
    ];
}
