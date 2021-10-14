<?php

namespace App\Models;
use App\Models\MsCtCreator;
use Illuminate\Database\Eloquent\Model;

class MsCTContent extends Model
{
    protected $guarded = [];

    public function data_creator()
    {
        return $this->belongsTo(MsCtCreator::class, 'id_creator', 'id');
    }
}
