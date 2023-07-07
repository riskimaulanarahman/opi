<?php

namespace App\Models\Module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odcdetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function panels()
    {
        return $this->belongsTo('App\Models\Module\Panel','panel_id');
    }

}
