<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisory extends Model
{
    use HasFactory;

    protected $table = 'advisory';

    protected $fillable = [
        'training_date',
        'proposal_no',
        'pic_name',
        'training_name',
        'training_description',
        'internal_partner',
        'instructor_name',
        'province',
        'city',
        'training_type',
        'training_level',
        'participant_count',
        'proposed_budget',
        'budget_type',
        'advisory_document',
        'created_at',
        'updated_at'
    ];
}