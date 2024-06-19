<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'registration_number',
        'year',
        'type',
        
    ];
}
