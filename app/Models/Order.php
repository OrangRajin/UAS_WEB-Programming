<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'order_id');
    }

    public function item(){
        return $this->hasMany('App\Models\item', 'order_id', 'item_id');
    }

}
