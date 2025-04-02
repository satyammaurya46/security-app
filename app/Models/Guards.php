<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guards extends Model
{
    use HasFactory;
    protected $fillable = [
        'society',
        'designation_category',
        'name',
        'email',
        'number',
        'aadhar_card',
        'pan_card',
        'password',
        'police_verification',
        'status'

    ];
}
