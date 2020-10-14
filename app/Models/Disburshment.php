<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disburshment extends Model
{
    use HasFactory;

    public function shareholder(){
        return $this->belongsTo('App\Models\User','shareholder_id');
    }
}
