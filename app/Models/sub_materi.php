<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_materi extends Model
{
    use HasFactory;
    protected $fillable = [
        'materi_id', 'nama_sub_materi', 'video'
    ];
}
