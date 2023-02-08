<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sequence extends Model
{
    use HasFactory;

    protected $table = 'sequences';
    
    protected $guarded = ['id'];

    protected $fillable = [
        'title', 'icon', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
