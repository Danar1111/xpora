<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileBuyer extends Model
{
    use HasFactory;

    protected $table = 'profile_buyer';

    protected $fillable = [
        'event_id',
        'event_name',
        'event_location',
        'company_name',
        'country',
        'city',
        'sector',
        'interested_product',
        'pic_name',
        'phone_number',
        'email',
        'website',
        'address',
        'created_at',
        'updated_at'
    ];
}