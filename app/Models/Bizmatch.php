<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bizmatch extends Model
{
    use HasFactory;

    protected $table = 'bizmatch';

    protected $fillable = [
        'event_name',
        'partner_event',
        'region_scope',
        'country',
        'city',
        'business_sector',
        'product_category',
        'umkm_name',
        'buyer_name',
        'progress',
        'result',
        'created_at',
        'updated_at'
    ];
}