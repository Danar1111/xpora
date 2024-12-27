<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    use HasFactory;

    protected $table = 'release'; // Ganti dengan nama tabel jika berbeda

    protected $fillable = [
        'release_date',
        'event_category',
        'bizmatch_event_name',
        'media_name',
        'news_link',
        'created_at',
        'updated_at'
    ];
}
