<?php

namespace App\Models\Module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataodc extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function odcs()
    {
        return $this->belongsTo('App\Models\Module\Odc','odc_id');
    }

}
