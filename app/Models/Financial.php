<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;

    public function shareholder_name(){
        return $this->belongsTo('App\Models\User','shareholder_id');
    }
    public function lc_number(){
        return $this->belongsTo('App\Models\Project','project_id');
    }
    public function total_amount(){
        return $this->belongsTo('App\Models\User','shareholder_id');
    }
    public function each_person_share(){
        return $this->belongsTo('App\Models\User','shareholder_id');
    }
}
