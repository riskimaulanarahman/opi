<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignmentto extends Model
{
    use HasFactory;

    protected $table = 'devPortal_toAssignment';

    protected $guarded = ['id'];

    public function developer()
    {
        return $this->belongsTo('App\Models\Developer','developer_id');
    }
    
}
