<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = [
        'user_id', 'name', 'price', 'stock'
    ];

    public function items(){
        return $this->belongsTo('App\User', 'id');
    }
}
