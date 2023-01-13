<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Front extends Model
{
    use HasFactory;

    protected $guard = ['id'];

    protected $fillable = [
        'title', 'route', 'submenu', 'is_parent', 'is_active', 'group'
    ];
}
