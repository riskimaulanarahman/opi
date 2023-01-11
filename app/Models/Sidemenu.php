<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidemenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
        'route',
        'has_parent',
        'has_childern',
        'parent_id',
        'group_id'
    ];

    protected $table = 'sidemenu';
}
