<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcom extends Model
{
    use HasFactory;

    protected $table = 'marcom';

    protected $fillable = [
        'marcom_date',
        'bizmatch_event_name',
        'video_link',
        'picture_link',
        'content_category',
        'allocation',
        'created_at',
        'updated_at'
    ];
}