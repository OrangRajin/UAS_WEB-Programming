<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'gender_id');
    }
}
