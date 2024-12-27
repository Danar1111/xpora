<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';

    protected $fillable = [
        'start_date',
        'document_no',
        'event_name',
        'region',
        'country',
        'city',
        'event_category',
        'business_sector',
        'product_name',
        'proposed_budget',
        'realized_budget',
        'budget_type',
        'event_document',
        'event_description',
        'created_at',
        'updated_at'
    ];
}