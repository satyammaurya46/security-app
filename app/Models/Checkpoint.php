<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkpoint extends Model
{
    use HasFactory;
    protected $fillable = [
        'society_name',
        'checkpoint_name',
        'location'
    
    ];
}
