<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    public function order(){
        return $this->belongsTo('App\Models\Order', 'order_id', 'item_id');
    }
}
