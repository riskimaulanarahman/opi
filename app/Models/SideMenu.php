<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideMenu extends Model
{
    use HasFactory;

    protected $table = 'side_menus';
    
    protected $guard = ['id'];
    protected $table = 'side_menus';
    protected $fillable = [
        'title', 'route', 'icon_id', 'parent_id', 'sequence_id', 'is_active', 'is_parent', 'must_full_title'
    ];
}
