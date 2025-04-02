<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class society extends Model
{
    use HasFactory;
    protected $fillable = [
        'society_name',  
        'address',
        'user_name',
        'society_type',
        'designation',
        'mobile',
        'email',
    ];
}
